<?php

namespace App\Lib\Cache;

interface CacheStorageInterface
{
    public function get(string $key): mixed;

    public function set(string $key, mixed $value, int $ttl = 0): void;

    public function ttl(string $key): ?int;

    public function exist(string $key): bool;

    public function delete(string $key): void;

    public function inc(string $key, int $step = 1, int $ttl = 0): int;

    public function dec(string $key, int $step = 1, int $ttl = 0): int;

    public function getWithClosure(string $key, callable $callable, int $ttl = 0): mixed;

    public function deleteAll();
}