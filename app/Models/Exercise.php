<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description_NL', 'description_ENG'];
    use HasFactory;
}
