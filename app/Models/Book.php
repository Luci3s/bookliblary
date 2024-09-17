<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $timestamp = false;
    protected $fillable = [
        'title',
        'description',
        'page_count',
        'author_name',
        'author_email',
        'published_date',
    ];
}
