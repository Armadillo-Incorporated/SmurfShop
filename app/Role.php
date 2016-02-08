<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
    ];

    /**
     * A Role has many users
     * 
     * @return App\User
     */
    public function users() {
        return $this->hasMany('App\User');
    }
}
