<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackClass extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $guarded = [];
    public $timestamps = false;
}
