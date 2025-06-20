<?php

// app/Models/Client.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'relationship_to_profile',
        'health_conditions',
        'special_requirements'
    ];

    protected $casts = [
        'health_conditions' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
