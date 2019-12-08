<?php

declare(strict_types=1);

namespace Swarmtech\Auth0;

use Auth0\SDK\Helpers\Cache\CacheHandler;
use Predis\Client;

/**
 * Class RedisCacheHandler
 * @package Swarmtech\Auth0
 */
final class RedisCacheHandler implements CacheHandler
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function get($key)
    {
        $data = $this->client->get($key);

        if (! isset($data)) {
            return null;
        }

        return unserialize(base64_decode($data));
    }

    public function delete($key)
    {
        $this->client->del($key);
    }

    public function set($key, $value)
    {
        $value = base64_encode(serialize($value));

        $this->client->set($key, $value);
    }
}
