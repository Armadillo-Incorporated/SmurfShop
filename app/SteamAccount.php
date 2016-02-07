<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SteamAccount extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'steam_id', 'username', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * A Steam Account has one email
     * 
     * @return void
     */
    public function email_account() {
        return $this->hasOne('App\EmailAccount');
    }

    /**
     * A Steam Account might have digits
     * 
     * @return void
     */
    public function digits() {
        return $this->belongsTo('App\Digit');
    }

    /**
     * A Steam Account might have a rank
     * 
     * @return void
     */
    public function rank() {
        return $this->belongsTo('App\Rank');
    }
}
