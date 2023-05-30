<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $table = 'shoes';
    protected $primaryKey = 'id';
    protected $fillable = ['brand', 'size', 'color','price','supplier'];
}
