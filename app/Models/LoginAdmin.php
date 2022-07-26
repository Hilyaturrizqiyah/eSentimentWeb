<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class LoginAdmin extends Authenticatable
{
    protected $table="admins";
    protected $primaryKey = 'user_id';
    protected $fillable = ['name', 'email', 'password']; //field tabel
    public $timestamps = false;
}