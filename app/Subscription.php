<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];

    public function subscribe()
    {
        return $this->hasMany(Subscribe::class, 'subscription_id');
    }

}
