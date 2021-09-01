<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudUsers extends Model
{
    use HasFactory;
    protected $fillable = ['id','name', 'phone', 'email'];
}
