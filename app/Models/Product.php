<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'no_ruas',
        'nama_ruas',
        'cluster',
        'status',
        'categories',
        'image',
    ];
}