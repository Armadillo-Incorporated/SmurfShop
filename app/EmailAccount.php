<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailAccount extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function steam_account() {
        return $this->belongsTo('CanRover\SteamAccount');
    }
}
