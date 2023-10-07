<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    JWTSubject
{
    use Authenticatable, Authorizable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    // protected $hidden = ['password'];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public static function validationRules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
            'username' => 'required|string|unique:users,username,NULL,id,deleted_at,NULL',
            'password' => 'required|string',
        ];
    }

    public static function recipientValidationRules()
    {
        return [
            'email' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
            'phone' => 'required|regex:/(03)[0-9]{9}/|unique:users,phone,NULL,id,deleted_at,NULL',
            'password' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'state_id' => 'required|int|exists:states,id',
            'city_id' => 'required|int|exists:cities,id',
            'zip' => 'required|digits:5|integer',
            'register_from' => 'required|in:web,ios,android,postman',
        ];
    }
}