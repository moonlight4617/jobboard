<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Jobs;
use App\Models\ContactUsers;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\Company\VerifyEmail;
use Illuminate\Notifications\Notifiable;



class Companies extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }

    public function ContactUsers()
    {
        return $this->hasMany(ContactUsers::class);
        // return $this->belongsToMany(ContactUsers::class, 'contact_users');
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'intro',
        'image1',
        'image2',
        'image3',
        'tel',
        'post_code',
        'address',
        'homepage'
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
    ];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail());
    }
}
