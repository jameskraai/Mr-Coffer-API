<?php

namespace MrCoffer;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the Accounts owned by this User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany('MrCoffer\Account\Account');
    }

    /**
     * Check to see if this Account owns a related model.
     *
     * @param Model $related
     *
     * @return bool
     */
    public function owns(Model $related)
    {
        return $this->getAttribute('id') == $related->getAttribute('user_id');
    }
}
