<?php

namespace App\Lib\Cache;

class ApcuCacheStorage implements CacheStorageInterface
{

    public function get(string $key): mixed
    {
        $data = apcu_fetch($key);
        if (empty($data)) return null;

        unset($data['expiration_time']);
        return $data['data'];
    }

    public function set(string $key, mixed $value, int $ttl = 0): void
    {
        $data = [
            'data' => $value,
            'expiration_time' => time() + $ttl,
        ];
        apcu_store($key, $data, $ttl);
    }

    public function ttl(string $key): ?int
    {
        if (apcu_exists($key)) {
            $expiry = apcu_fetch($key)['expiration_time'];
            return $expiry - time();
        }

        return -1;
    }

    public function expireAt(string $key): ?\DateTime
    {
        if (apcu_exists($key)) {
            return new \DateTime(apcu_fetch($key)['expiration_time']);
        }

        return null;
    }

    public function exist(string $key): bool
    {
        return apcu_exists($key);
    }

    public function delete(string $key): void
    {
        apcu_delete($key);
    }

    public function inc(string $key, int $step = 1, int $ttl = 0): int
    {
        if ($value = $this->get($key)) {
            $this->set($key, $value + $step, $this->ttl($key));
        } else {
            $value = $step;
            $this->set($key, $value, $ttl);
        }

        return $value;
    }

    public function dec(string $key, int $step = 1, int $ttl = 0): int
    {
        if ($value = $this->get($key)) {
            $this->set($key, $value - $step, $this->ttl($key));
        } else {
            $value = -1 * $step;
            $this->set($key, $value, $ttl);
        }

        return $value;
    }

    public function getWithClosure(string $key, callable $callable, int $ttl = 0): mixed
    {
        return apcu_entry($key, $callable, $ttl);
    }

    public function deleteAll()
    {
        apcu_clear_cache();
    }
}