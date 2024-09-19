<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Ruas extends Model
{
    use HasFactory;
    
    protected $table = 'ruas';
    protected $fillable = [
        'no_ruas',
        'provinsi',
        'panjang_ruas',
        'lebar_kerasan',
        'tipe_kerasan',
    ];
}