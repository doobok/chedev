<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Mark extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['name'];

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }

}
