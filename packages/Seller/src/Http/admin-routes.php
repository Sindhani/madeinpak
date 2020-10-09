<?php

use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['web', 'admin']], function () {

    Route::get('/seller/home', 'Seller\Http\Controllers\Admin\SellerController@index')->defaults('_config', [
        'view' => 'seller::admin.index',
    ])->name('seller.admin.index');

});