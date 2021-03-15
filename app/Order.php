<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['product_id', 'user_id', 'price', 'installment', 'installment_value', 'payment_code', 'status', 'confirmed'];

    public function product(){
        return $this->hasOne(\App\Product::class, "id", "product_id");
    }

    public function user(){
        return $this->hasOne(\App\User::class, "id", "user_id");
    }
}
