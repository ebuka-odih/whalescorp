<?php

namespace App;

use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fund_type()
    {
        if ($this->type == "Loss")
        {
            return "Loss";
        }elseif ($this->type == "Referral-Bonus" || $this->type == "Bonus"){
            return "Bonus";
        }
        return "Profit";
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge bg-danger text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='badge bg-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Canceled</span>";
        }
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
