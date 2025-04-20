<?php

use Illuminate\Support\Facades\Route;
use AutoPoster\Facades\SocialPoster;

Route::get('/', function () {
    dd(SocialPoster::facebook()->getLoginURL());
});
