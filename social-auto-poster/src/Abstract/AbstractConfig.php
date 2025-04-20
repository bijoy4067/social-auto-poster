<?php

namespace SocialPoster\Abstract;

class AbstractConfig
{
    private $configPath = __DIR__ . '/../Config/social-config.php';
    private $config = null;

    public function __construct()
    {
        $this->config = file_get_contents($this->configPath);
    }

    public static function facebook()
    {
        dd(self::$config);
    }
}