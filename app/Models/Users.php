<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = "users";
    protected $fillable=['username','fullname','email','password','role'];
    protected $primaryKey = 'user_id';
    public $timestamps=false;
}
