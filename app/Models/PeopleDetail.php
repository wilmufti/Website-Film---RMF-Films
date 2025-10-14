<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'people_details';
    protected $primaryKey = 'person_id';
}