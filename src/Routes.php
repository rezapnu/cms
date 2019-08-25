<?php

Route::Group(['namespace' => 'Cms\Controllers'], function () {
    Route::get('cms', 'IndexController@Index');
    Route::get('config', function () {
        return config('cms.name');
    });
});


