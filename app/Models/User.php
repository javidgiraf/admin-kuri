<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class, 'user_id', 'id');
    }
    public function active_customer()
    {
        return $this->hasOne(Customer::class, 'user_id', 'id')->where('status', 1)->where('is_verified', '1');
    }
    public function UserSubscriptions()
    {
        return $this->hasMany(UserSubscription::class, 'user_id', 'id');
    }
    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
    }
    public function nominee()
    {
        return $this->hasOne(Nominee::class, 'user_id', 'id');
    }
}
