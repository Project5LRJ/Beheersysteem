<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public $timestamps = false;
    protected $fillable = ['title_NL', 'title_ENG', 'description_NL', 'description_ENG'];
    use HasFactory;
}
