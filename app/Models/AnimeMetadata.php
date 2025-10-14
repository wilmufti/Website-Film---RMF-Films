<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeMetadata extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'anime_metadata';
    protected $primaryKey = 'anime_name';
    public $incrementing = false;
    protected $keyType = 'string';
}