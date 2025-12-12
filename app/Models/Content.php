<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';

    protected $fillable = ['type', 'title', 'content', 'image_path', 'link', 'is_active', 'sort_order', 'published_at'];
}
