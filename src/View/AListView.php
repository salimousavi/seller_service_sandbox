<?php

namespace App\View;

use App\Helpers;
use App\Lib\Exception\IpLimiterException;
use App\Lib\Helper\TimeService;
use App\Lib\Resolver\APIRequest;
use App\Service\CacheService;
use Assert\Assert;

abstract class AListView
{
    use Helpers;

    const MAX_RATE_LIMITER = 100;
    const RATE_LIMIT_DURATION = TimeService::MINUTE * 5;

    private array $sort_data = [];
    private array $pager = [];
    private array $form_data = [];
    private array $items = [];
    private array $metadata = [];
    private array $rateLimit = [];

    public function __construct(
        private APIRequest    $apiRequest,
        private ?CacheService $cacheService = null
    )
    {
    }

    public function build(): array
    {
        $this->loadData();
        $this->validateData();

        $this->items = static::mockDataClass()::ITEMS;

        $this->buildFilter();
        $this->buildPager(); // After Execution

        return [
            "sort_data" => $this->sort_data,
            "pager" => $this->pager,
            "form_data" => $this->form_data,
            "items" => $this->items,
            "meta_data" => $this->metadata,
            "rate_limit" => $this->rateLimit,
        ];
    }

    private function loadData(): void
    {
        $this->pager = [
            "page" => intval($this->apiRequest->getAllQueryParams()['page'] ?? 1),
            "item_per_page" => intval($this->apiRequest->getAllQueryParams()['size'] ?? 20),
            "total_pages" => 0,
            "total_rows" => 0,
        ];

        Assert::that($this->pager['page'])
            ->nullOr()
            ->integerish('page number must be integer');
        Assert::that($this->pager['item_per_page'])
            ->nullOr()
            ->integerish('page size must be integer');


        $this->sort_data = [
            "sort_column" => $this->apiRequest->getAllQueryParams()['sort'] ?? "id",
            "sort_order" => $this->apiRequest->getAllQueryParams()['order'] ?? "asc",
            "sort_columns" => [
                "id"
            ],
        ];

        Assert::that($this->sort_data['sort_column'])
            ->inArray(
                $this->sort_data['sort_columns'],
                'sort column can be one of these columns: ' . implode(',', $this->sort_data['sort_columns'])
            );
        Assert::that($this->sort_data['sort_order'])->inArray(['asc', 'desc'], 'sort order can be \'asc\' or \'desc\'');

        $this->form_data = $this->apiRequest->getAllQueryParams()['search'] ?? [];
        Assert::that($this->form_data)->isArray('search params must be passed as array');

        $this->rateLimit = $this->checkAndGetRateLimit();
    }


    private function checkAndGetRateLimit()
    {
        if (empty($this->cacheService)) return null;

        $request = $this->apiRequest->getRequest();
        $ipLong = ip2long($request->getClientIp());
        if (empty($ipLong)) return null;
        $cacheKey = 'iplimit:' . $ipLong . ':' . md5($request->getPathInfo());

        $count = $this->cacheService->get($cacheKey);

        if (empty($count)) {
            $this->cacheService->inc($cacheKey, 1, self::RATE_LIMIT_DURATION);
        } elseif ($count < self::MAX_RATE_LIMITER) {
            $this->cacheService->inc($cacheKey, 1, $this->cacheService->ttl($cacheKey));
        } else {
            throw new IpLimiterException($request->getClientIp());
        }

        return [
            'max' => self::MAX_RATE_LIMITER,
            'current' => $count,
            'reset_time' => $this->serviceTime()->addSecondsToNow($this->cacheService->ttl($cacheKey))->format(TimeService::FORMAT_YMDHIS),
        ];
    }

    protected function validateData()
    {
        return;
    }

    abstract static protected function mockDataClass(): string;

    private function buildFilter(): void
    {
        return;
    }

    private function buildPager(): void
    {
        $this->pager['total_rows'] = count($this->items);
        $this->pager['total_pages'] = floor($this->pager['total_rows']/$this->pager['item_per_page']) + 1;
        $this->items = array_slice(
            $this->items,
            (($this->pager['page'] - 1) * $this->pager['item_per_page']),
            $this->pager['item_per_page']
        );
    }

}