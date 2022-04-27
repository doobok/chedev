<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Blog extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['title', 'body', 'heading', 'description', 'teaser'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
