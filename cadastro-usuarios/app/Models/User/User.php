<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nome', 'email', 'senha'];
    
    protected $hidden = ['senha'];
}
