<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AmrShawky\LaravelCurrency\Facade\Currency;

class Deposit extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transId()
    {
        return "#TNX43265".$this->id;
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class, "payment_method_id");
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge badge-success '>Successful</span>";
        }else{
            return "<span class='badge badge-danger'>Cancelled</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge bg-danger text text-uppercase'>Cancelled</span>";
        }
    }

    public function rate()
    {
        $currency = Currency::convert()
            ->from('BTC')
            ->to('USD')
            ->get();
        return substr($currency, 0, 6);
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
