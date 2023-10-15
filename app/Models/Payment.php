<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $table = "payment";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}