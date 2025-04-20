<?php

return [
    'facebook' => [
        'app_id' => '4071144333111775',
        'app_secret' => 'ebf17438e572c9dbd1d51a18091114bf',
        'redirect_url' => 'https://updater.wpwebelite.com/codebase/SAP-PHP/fb/index.php',
        'app_version' => 'v3.0',
        'instagram' => [
            'app_id' => '4071144333111775',
            'app_secret' => 'ebf17438e572c9dbd1d51a18091114bf',
            'redirect_url' => 'https://updater.wpwebelite.com/codebase/SAP-PHP/fb/index-instagram.php',
        ],
    ],

    'linkedin' => [
        'app_id' => '78atjnjdyfgvd8',
        'app_secret' => 'DSgb8XJB6jHpgXWq',
        'redirect_url' => 'https://updater.wpwebelite.com/codebase/SAP-PHP/li/index.php',
    ],

    'reddit' => [
        'client_id' => 'IS9gj7xgMtDCWPA9PDGriQ',
        'client_secret' => 'kQHHqYKnT1s2bmFVbF70kq2WyTm8rw',
        'redirect_url' => 'https://updater.wpwebelite.com/codebase/SAP-PHP/reddit/index.php',
        'scopes' => [
            'save', 'modposts', 'identity', 'edit', 'flair', 'history',
            'modconfig', 'modflair', 'modlog', 'modposts', 'modwiki',
            'mysubreddits', 'privatemessages', 'read', 'report', 'submit',
            'subscribe', 'vote', 'wikiedit', 'wikiread'
        ],
    ],

    'tumblr' => [
        'app_key' => 'FknIg4UwDenGJcVpUC3qasyFmQefJz3W2SN8CR02IkJBm00qC2',
        'app_secret' => 'vbRZ3j0J2UM5XG4GnioI5bLsjyXGA5RuGMSkVttgCR1lLUhRsJ',
        'redirect_url' => 'https://updater.wpwebelite.com/codebase/SAP-PHP/tb/index.php',
    ],

    'google' => [
        'gmb' => [
            'client_id' => '804943316894-vksk1aj1mpkec9k57ocp8pttmno62hvk.apps.googleusercontent.com',
            'client_secret' => 'ns7XgpZEiAp3KalQFkcgH12Z',
            'redirect_url' => 'https://updater.wpwebelite.com/codebase/SAP-PHP/gmb/success.php',
            'scope' => 'https://www.googleapis.com/auth/plus.business.manage',
        ],
        'blogger' => [
            'client_id' => '804943316894-vksk1aj1mpkec9k57ocp8pttmno62hvk.apps.googleusercontent.com',
            'client_secret' => 'ns7XgpZEiAp3KalQFkcgH12Z',
            'redirect_url' => 'https://updater.wpwebelite.com/codebase/SAP-PHP/blogger/index.php',
            'auth_url' => 'https://accounts.google.com/o/oauth2/v2/auth?',
            'access_token_url' => 'https://oauth2.googleapis.com/token',
            'userinfo_url' => 'https://www.googleapis.com/oauth2/v1/userinfo',
            'scopes' => [
                'https://www.googleapis.com/auth/blogger',
                'https://www.googleapis.com/auth/userinfo.profile'
            ],
        ],
    ]
];