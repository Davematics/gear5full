<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function adsimages()
    {
        return $this->hasone(AdsImage::class,'ads_id','id');
    }

    public function Vendor()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
