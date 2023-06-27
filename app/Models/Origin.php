<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Origin extends Model
{
    protected $table = "tbl_origin";
    protected $fillable = ['name', 'code'];
    protected $primaryKey = 'origin_id';
    public $timestamps = true;
}
