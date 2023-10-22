<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = "categories";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}