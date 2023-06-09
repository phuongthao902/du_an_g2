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

    public function hasRole($roles)
    {
        if (is_string($roles)) {
            return $this->roles->contains('name', $roles);
        }

        foreach ($roles as $role) {
            if ($this->hasRole($role->name)) {
                return true;
            }
        }

        return false;
    }

    // public function profile()
    // {
    //     $user = User::find(1);
    //     $profile = $user->profile;
    //     return $this->hasOne(Profile::class);
    // }
    // protected static function booted()
    // {
    //     static::created(function ($user) {
    //         $user->profile()->create([
    //             'name' => $user->name,
    //             'avatar' => 'default.jpg' // giá trị mặc định cho avatar
    //         ]);
    //     });
    // }



}
