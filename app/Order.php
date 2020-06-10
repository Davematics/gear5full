<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function buyer()
    {
        return $this->hasone(User::class,'id','buyer_id');
    }   //
}
