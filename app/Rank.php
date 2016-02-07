<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ranks',
    ];

    /**
     * A Rank may have many digits
     * 
     * @return void
     */
    public function digits() {
        return $this->hasMany('CanRover\Digit');
    }

    /**
     * A Rank has many Steam Accounts
     * 
     * @return void
     */
    public function steam_account() {
        return $this->hasMany('CanRover\SteamAccount');
    }
}
