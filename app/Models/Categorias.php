<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    public $table = 'categorias';
    protected $fillable = ['nombre', 'slug'];

    public function articulos()
    {
        return $this->hasMany(Articulos::class);
    }
}
