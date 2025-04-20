<?php

namespace SocialPoster\Social;

use Facebook\Facebook;

/**
 * Facebook Configuration and Authentication Handler
 */
class FacebookConfig
{
    /** @var array|null Facebook configuration parameters */
    private $config = null;

    /** @var Facebook|null Facebook SDK instance */
    private $social = null;

    /** @var \Facebook\Helpers\FacebookRedirectLoginHelper|null Facebook login helper instance */
    private $helper = null;

    /**
     * Initialize Facebook configuration and SDK
     *
     * @param array $config Facebook configuration parameters
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->social = new Facebook(array(
            'app_id'     => $this->config['app_id'],
            'app_secret' => $this->config['app_secret'],
            'cookie'     => true,
            'default_graph_version' => $this->config['app_version'],
        ));
        $this->helper = $this->social->getRedirectLoginHelper();
    }

    /**
     * Generate Facebook Login URL with required permissions
     *
     * @return string Facebook login URL with permissions and state parameter
     */
    public function getLoginURL()
    {
        // Define required Facebook permissions
        $permissions = ['email', 'public_profile', 'publish_pages', 'pages_manage_posts'];
        
        // Generate login URL with redirect URL and permissions
        $loginUrl = $this->helper->getLoginUrl($this->config['redirect_url'], $permissions);
        
        // Append state parameter with application URL
        $loginUrl = $loginUrl . '&state=' . env('APP_URL');

        return $loginUrl;
    }
}
