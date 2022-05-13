<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    use HasFactory, Translatable, Resizable;

    protected $translatable = ['title', 'body', 'heading', 'description', 'teaser'];

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }

    public function stars()
    {
        return $this->hasOne(Rating::class, 'itemid')->where('model', '=', 'service');
    }
}
