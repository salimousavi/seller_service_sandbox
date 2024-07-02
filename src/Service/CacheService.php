<?php

namespace App\Service;

use App\Lib\Cache\CacheStorageInterface;

class CacheService implements CacheStorageInterface
{
    private CacheStorageInterface $cacheStorage;

    public function __construct(CacheStorageInterface $cacheStorage)
    {
        $this->cacheStorage = $cacheStorage;
    }


    public function get(string $key): mixed
    {
        return $this->cacheStorage->get($key);
    }

    public function set(string $key, mixed $value, int $ttl = 0): void
    {
        $this->cacheStorage->set($key, $value, $ttl);
    }

    public function ttl(string $key): ?int
    {
        return $this->cacheStorage->ttl($key);
    }

    public function exist(string $key): bool
    {
        return $this->cacheStorage->exist($key);
    }

    public function delete(string $key): void
    {
        $this->cacheStorage->delete($key);
    }

    public function inc(string $key, int $step = 1, int $ttl = 0): int
    {
        return $this->cacheStorage->inc($key, $step, $ttl);
    }

    public function dec(string $key, int $step = 1, int $ttl = 0): int
    {
        return $this->cacheStorage->dec($key, $step, $ttl);
    }

    public function getWithClosure(string $key, callable $callable, int $ttl = 0): mixed
    {
        return $this->cacheStorage->getWithClosure($key, $callable, $ttl);
    }

    public function deleteAll()
    {
        $this->cacheStorage->deleteAll();
    }
}