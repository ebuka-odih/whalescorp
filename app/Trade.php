<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning'>Open</span>";
        }elseif ($this->status > 0){
            return "<span class='badge badge-success'>Closed</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Cancelled</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning'>Open</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success'>Closed</span>";
        }else{
            return "<span class='badge bg-danger text text-uppercase'>Cancelled</span>";
        }
    }

}
