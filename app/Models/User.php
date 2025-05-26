<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'phone',
        'date_of_birth '=> 'date',
        'gender'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function caregiver()
    {
        return $this->hasOne(Caregiver::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function isAdmin()
    {
        return $this->role_id === Role::ADMIN;
    }

    public function isCaregiver()
    {
        return $this->role_id === Role::CAREGIVER;
    }

    public function isUser()
    {
        return $this->role_id === Role::USER;
    }
}
