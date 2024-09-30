<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Author;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'description', 'price', 'release_date', 'type'];
}
