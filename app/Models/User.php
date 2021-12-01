<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() : BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function isAdmin() : bool
    {
        return null !== $this->roles()->where('name', 'admin')->first();
    }

    /**
     * Check if user has a role
     *
     * @param string $role
     *
     * @return boolean
     */
    public function hasAnyRole(string $role): bool
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

    /**
     * Check if user has any given roles
     *
     * @param array $roles
     *
     * @return boolean
     */
    public function hasAnyRoles(array $roles): bool
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    public function conferences() : BelongsToMany
    {
        return $this->belongsToMany(Conference::class);
    }
}
