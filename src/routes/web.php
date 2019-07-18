<?php


Route::group(['namespace' => 'Rkecka\Bonopay\Http\Controllers'], function(){
    Route::get('bonopay', function(){
        return 'Bonopay string';
    });
    Route::get('bonopay/test', 'BonopayController@test');
});
