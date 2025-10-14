<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSeries extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tv_series';
}