<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'content',
        'image',
        'facebook_url',
        'instagram_url',
        'linkedin_url',
        'twitter_url',
    ];

}
