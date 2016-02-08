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
        'rank',
    ];

    /**
     * A Rank may have many digits
     * 
     * @return void
     */
    public function digits() {
        return $this->belongsToMany('App\Digit');
    }

    /**
     * A Rank has many Steam Accounts
     * 
     * @return void
     */
    public function steam_account() {
        return $this->hasMany('App\SteamAccount');
    }
}
