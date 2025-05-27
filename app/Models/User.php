<?php



namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'phone',
        'date_of_birth',
        'gender',
        'profile_picture' // Added profile picture field
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'date', // Fixed the typo (removed space)
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

    /**
     * Get the URL to the profile picture
     * 
     * @return string
     */
    public function getProfilePictureUrlAttribute()
    {
        if (!$this->profile_picture) {
            return asset('images/default-profile.png'); // Default image path
        }

        // Check if it's already a full URL (for migrated data)
        if (filter_var($this->profile_picture, FILTER_VALIDATE_URL)) {
            return $this->profile_picture;
        }

        return Storage::disk('public')->url($this->profile_picture);
    }

    /**
     * Delete the profile picture from storage
     * 
     * @return bool
     */
    public function deleteProfilePicture()
    {
        if (!$this->profile_picture) {
            return false;
        }

        if (Storage::disk('public')->exists($this->profile_picture)) {
            Storage::disk('public')->delete($this->profile_picture);
            return true;
        }

        return false;
    }
}