<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $table = "orders";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}