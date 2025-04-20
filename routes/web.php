<?php

use Illuminate\Support\Facades\Route;
use SocialPoster\Social\FacebookConfig;

Route::get('/', function () {
    $facebook = new FacebookConfig();
    dd($facebook->init());
});
