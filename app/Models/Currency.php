<?php

namespace App\Models;

use App\Events\CreateCurrencies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'usd_b',
        'usd_s',
        'eur_b',
        'eur_s',
    ];

    protected $dispatchesEvents = [
        'created' => CreateCurrencies::class,
    ];

}
