<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clustering extends Model
{
    use HasFactory;
    protected $fillable = [
        'distance_c1', 
        'distance_c2', 
        'distance_c3',
        'min_distance',
        'cluster'
    ];
}
