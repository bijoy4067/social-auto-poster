<?php

use AutoPoster\Social\FacebookConfig;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $facebook = new FacebookConfig();
    dd($facebook->getConfig());
});
