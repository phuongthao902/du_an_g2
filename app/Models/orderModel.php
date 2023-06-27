<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class orderModel extends Model
{
    protected $table = "tbl_order";
    protected $fillable=['quantity','address','total_price','status','bill_info','product_id'];
    protected $primaryKey = 'order_id';
    public $timestamps=true;
}
