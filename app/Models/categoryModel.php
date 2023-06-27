<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class categoryModel extends Model
{
    protected $table = "tbl_category";
    protected $fillable = ['category_name', 'category_desc', 'taxable', 'category_status', 'sort_ordel'];
    protected $primaryKey = 'category_id';
    public $timestamps = true;


}
