<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'voucher', 'price', 'installment', 'installment_free', 'limit'];

    public function stock(){
        return $this->hasOne(Stock::class, "product_id", "id")->orderby('id', 'desc');
    }

    public function stocks(){
        return $this->hasMany(Stock::class, "product_id", "id");
    }
}