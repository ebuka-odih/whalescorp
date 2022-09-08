<?php

namespace App;

use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $appends = ['referral_link'];
    protected $with = ['referredBy'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
        protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullname()
    {
        $fullname = $this->firstname." ".$this->lastname;
        return $fullname;
    }



    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function all_referrals()
    {
        $refs = User::whereReferredBy($this->id)->get();
        return $refs;
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by', 'id');
    }
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username, 'id'=> $this->id]);
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge bg-danger'>Suspend</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success'>Unsuspend</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Blocked</span>";
        }
    }

    public function withdrawal()
    {
        return $this->hasMany(Withdrawal::class, 'user_id');
    }
    public function deposit()
    {
        return $this->hasMany(Deposit::class, 'user_id');
    }
    public function funding()
    {
        return $this->hasMany(Funding::class, 'user_id');
    }

    public function trade()
    {
        return $this->hasMany(Trade::class, 'user_id');
    }
    public function subscribe()
    {
        return $this->hasMany(Subscribe::class, "user_id");
    }
    public function user()
    {
        return $this->hasMany(Message::class, 'user_id');
    }

    public function getProfilePicAttribute($value) {
        if(!$this->attributes['avatar']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->name);
        }
        return '/avatar/' . $this->attributes['avatar'];
    }

    public function BTCbalance($amount)
    {
        $currency = Currency::convert()
            ->from('USD')
            ->to('BTC')
            ->source('crypto')
            ->round(7)
            ->get();
        return $currency * $amount;
    }

    public function messageCount()
    {
         $message = Message::where('user_id',$this->id)->count();
         return $message;
    }

}


