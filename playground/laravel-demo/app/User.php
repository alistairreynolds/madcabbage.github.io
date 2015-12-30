<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /**
     * Returns the films that a wants to watch
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function watchList()
    {
        return $this->hasMany('App\Film');
    }


    /**
     * Returns the films that this user added
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filmsAdded()
    {
        return $this->hasMany('App\Film');

    }


    /**
     * Checks to see if the user is an admin
     * @return bool
     */
    public function isAdmin()
    {
        if($this->attributes['is_admin'])
            return true;
        else
            return false;
    }
}
