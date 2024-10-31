<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_name',
        'client_id',
        'image', // tambahkan kolom lain yang Anda gunakan
    ];
    
}