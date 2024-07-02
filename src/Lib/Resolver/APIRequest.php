<?php

namespace App\Lib\Resolver;

use Symfony\Component\HttpFoundation\Request;

class APIRequest
{
    public function __construct(private Request $request)
    {
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function getAllHeaders(): array
    {
        return $this->request->headers->all();
    }

    public function getHeader(string $key)
    {
        return $this->request->headers->get($key);
    }

    public function getAllQueryParams(): array
    {
        return $this->request->query->all();
    }

    public function getAllRequestParams(): array
    {
        return $this->request->request->all();
    }

    public function getAllUrlParams(): array
    {
        return $this->request->attributes->get("_route_params");
    }

    public function getClientIp(): ?string
    {
        return $this->request->getClientIp();
    }
}