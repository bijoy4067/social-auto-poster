<?php

namespace SocialPoster\Social;

class LinkdinConfig extends AbstractConfig
{
    protected static function loadConfig()
    {
        if (self::$config === null) {
            self::$config = include(__DIR__. '/../Config/social-config.php');
        }
        return self::$config['linkdin'];
    }
}