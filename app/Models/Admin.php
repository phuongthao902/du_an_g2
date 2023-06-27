<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authentication;

class Admin extends Authentication
{
    public $timestamps = false;
    protected $fillable = [
        'email',
        'password',
        'name',
        'phone',
        'avatar'
    ];
    protected $primaryKey = 'id';
    protected $table = 'users';

    public function roles()
    {
        return $this->belongsToMany('App\Models\Roles');
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function hashAnyRoles($roles)
    {
        return null !== $this->roles()->where('name', $roles)->first();
    }
    public function hasRole($roles)
    {
        return null !== $this->roles()->where('name', $roles)->first();
    }
}
