<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ["name","description","author", "image", "approved"];
}
