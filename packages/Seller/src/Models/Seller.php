<?php

namespace Seller\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Product\Models\ProductProxy;
use Seller\Contracts\Seller as SellerContract;
class Seller extends Model implements SellerContract
{
    protected $fillable = [];
}