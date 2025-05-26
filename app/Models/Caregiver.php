<?php

// app/Models/Caregiver.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'social_security',
        'driver_license_front',
        'driver_license_back',
        'car_brand',
        'car_model',
        'car_plate_number',
        'home_care_aid_number',
        'certifications',
        'languages_spoken',
        'profile_picture'
    ];

    protected $casts = [
        'languages_spoken' => 'array',
        'certifications' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
