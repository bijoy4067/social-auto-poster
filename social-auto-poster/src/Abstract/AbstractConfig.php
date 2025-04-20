<?php

namespace SocialPoster\Abstract;

use SocialPoster\Social\FacebookConfig;

class AbstractConfig
{
    protected static $config = null;

    protected static function loadConfig()
    {
        if (self::$config === null) {
            self::$config = include(__DIR__ . '/../Config/social-config.php');
        }
        return self::$config;
    }

    public static function __callStatic($name, $arguments)
    {
        $config = self::loadConfig();
        if (!isset($config[$name])) {
            throw new \Exception("Social media platform '{$name}' not configured");
        }

        $className = 'SocialPoster\\Social\\' . ucfirst($name) . 'Config';
        if (!class_exists($className)) {
            throw new \Exception("Class {$className} not found");
        }

        return new $className($config[$name]);
    }
}
