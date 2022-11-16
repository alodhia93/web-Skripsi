<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function getNamaAttribute($nama)
    {
        return ucwords($nama);
    }

    public function setNamaAttribute($nama)
    {
        $this->attributes['nama'] = strtolower($nama);
    }
    
    protected $fillable = [
        'nim','nama', 'email', 'Jenis_Kelamin', 'fakultas', 'foto', 'password', 'level','prodi','fakultas'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
