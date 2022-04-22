<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Portfolio extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['title', 'body', 'heading', 'description', 'teaser'];

    public function tags()
    {
        return $this->belongsToMany(Mark::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

}
