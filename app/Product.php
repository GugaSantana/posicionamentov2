<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'voucher', 'price', 'installment', 'installment_free', 'limit'];
}