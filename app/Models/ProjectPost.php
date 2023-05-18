<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'picture_path',
        'link_path',
        'link_text',
        'link_path_2',
        'link_text_2',
        'language_logo_path',
    ];
}
