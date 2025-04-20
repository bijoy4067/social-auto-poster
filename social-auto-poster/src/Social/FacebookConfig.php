<?php

namespace SocialPoster\Social;

use Facebook\Facebook;

class FacebookConfig
{
    public function init()
    {
        $fb = new Facebook([
            'app_id' => '4071144333111775',
            'app_secret' => 'ebf17438e572c9dbd1d51a18091114bf',
            'default_graph_version' => 'v2.10',
            //'default_access_token' => '{access-token}', // optional
        ]);
        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me');
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        return $response->getGraphUser();
    }
}
