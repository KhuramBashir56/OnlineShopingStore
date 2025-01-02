<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'profile_photo_path'];

    protected $guarded = ['id', 'login_otp', 'login_otp_token', 'login_otp_expired_at', 'created_at', 'updated_at', 'email_verified_at'];

    protected $hidden = ['password', 'remember_token'];

    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $casts = [
        'email_verified_at' => 'datetime',
        'login_otp_expired_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
