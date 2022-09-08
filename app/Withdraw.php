<?php

namespace App;

use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function withdraw_method()
    {
        return $this->belongsTo(WithdrawMethod::class);
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge badge-success'>Successful</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Cancelled</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-danger text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='badge bg-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Canceled</span>";
        }
    }

    public function transId()
    {
        return "#TNX43265".$this->id;
    }
    public function showBTCRate()
    {
        $btc =  Currency::convert()
            ->from('USD')
            ->to('BTC')
            ->source('crypto')
            ->round(7)
            ->get();
        return $btc * $this->amount;
    }
}
