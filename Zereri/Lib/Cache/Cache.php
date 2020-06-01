<?php
namespace Zereri\Lib\Cache;

use Zereri\Lib\Register;

class Cache
{
    public static function __callStatic($func, $arguments)
    {
        if (self::isFirstCallCache()) {
            $class = self::getCacheClassName();
            $cache_instance = new $class;
            self::registerCacheInstance($cache_instance);
        } else {
            $cache_instance = self::getCacheInstance();
        }

        return $cache_instance->$func(...$arguments);
    }


    protected static function isFirstCallCache()
    {
        return !Register::has("CacheInstance");
    }


    protected static function registerCacheInstance($cache_instance)
    {
        Register::set("CacheInstance", $cache_instance);
    }


    protected static function getCacheInstance()
    {
        return Register::get("CacheInstance");
    }


    protected static function getCacheClassName()
    {
        return "\Zereri\Lib\Cache\\" . ucfirst(config("cache.drive"));
    }
}