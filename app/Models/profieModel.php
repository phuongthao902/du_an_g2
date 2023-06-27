<?php

namespace App\Models;


use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class profileModel extends Model
{
    public function user()
    {
        $profile = profileModel::find(1);
        $user = $profile->user;

        return $this->belongsTo(User::class);
    }

}
