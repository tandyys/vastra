<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class newsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', // add any other attributes that are mass assignable
        'content'
    ];
}
