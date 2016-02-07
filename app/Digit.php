<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Digit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'digits',
    ];

    /**
     * Digits may have many ranks
     * 
     * @return void
     */
    public function Rank() {
        return $this->belongsToMany('App\Rank');
    }

    /**
     * Digits have many Steam Accounts
     * 
     * @return void
     */
    public function steam_account() {
        return $this->hasMany('App\SteamAccount');
    }
}
