<?php

namespace App\Entity;

use App\Repository\RequestLoggerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RequestLoggerRepository::class)]
class RequestLogger
{
    const STATUS_OK = 'ok';
    const STATUS_ERROR = 'error';
    const STATUS_RECEIVED = 'received';
    const STATUS_ALL = [
        self::STATUS_OK,
        self::STATUS_ERROR,
        self::STATUS_RECEIVED,
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $route_name = null;

    #[ORM\Column(length: 255)]
    private ?string $uri = null;

    #[ORM\Column(nullable: true)]
    private ?int $response_code = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ip = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?array $query_params = null;

    #[ORM\Column(nullable: true)]
    private ?array $request_params = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $response = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRouteName(): ?string
    {
        return $this->route_name;
    }

    public function setRouteName(?string $route_name): self
    {
        $this->route_name = $route_name;
        return $this;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(?string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

    public function getResponseCode(): ?int
    {
        return $this->response_code;
    }

    public function setResponseCode(?int $response_code): self
    {
        $this->response_code = $response_code;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getQueryParams(): ?array
    {
        return $this->query_params;
    }

    public function setQueryParams(?array $query_params): self
    {
        $this->query_params = $query_params;
        return $this;
    }

    public function getRequestParams(): ?array
    {
        return $this->request_params;
    }

    public function setRequestParams(?array $request_params): self
    {
        $this->request_params = $request_params;
        return $this;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse(?string $response): self
    {
        $this->response = $response;
        return $this;
    }
}
