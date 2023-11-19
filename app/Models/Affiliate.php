<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affiliate extends Model
{
    use SoftDeletes;
    protected $table = "affiliate";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}