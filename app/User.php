<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * A User has a role
     * 
     * @return App\Role
     */
    public function role() {
        return $this->belongsTo('App\Role');
    }

    // public static function isModerator() {
    //     if ($this->role == 'moderator') {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
