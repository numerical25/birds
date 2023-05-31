<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bird extends Model
{
    protected $fillable = ['name', 'action'];
    use HasFactory;
}
