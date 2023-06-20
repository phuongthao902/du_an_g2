<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class productModel extends Model
{
    protected $table = "tbl_product";
    protected $fillable=['product_name','product_desc','unit_price','product_image','image_id','category_id','brand_id','origin_id'];
    protected $primaryKey = 'product_id';
    public $timestamps=true;
}
