<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // Table associée au modele
    protected $table = 'users';

    // Colonnes pouvant être massivement assignées
    protected $fillable = ['firstname', 'lastname', 'email'];

    // Utiliser la clé primaire par defaut (id)
    public $incrementing = true;
}
