<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'nama_jalan',
        'panjang_jalan',
        'Deskripsi',
        'titik_kerusakan',
        'lebar_kerusakan',
        'Status',
        'categories',
    ];
}