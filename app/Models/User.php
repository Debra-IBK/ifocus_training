<?php

namespace App\Models;

use App\Traits\HasRolesAndPermissions;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use  Notifiable, HasRolesAndPermissions; // Our new trait//

    const STATUS = ['active' => 'active', 'inactive' => 'inactive'];
    const USER_GROUP = ['admin' => 'Administartor', 'student' => 'Student', 'facilitator' => 'Facilitator'];

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'fname',
    //     'lname',
    //     'email',
    //     'password',
    //     'phone_no',
    // ];

    protected $guarded = ['uuid', 'id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    protected static function booted()
    {
        static::creating(function ($user) {
            $user->uuid = (string) \Illuminate\Support\Str::uuid(); // Create uuid when a new user is to be created
        });
    }
}
