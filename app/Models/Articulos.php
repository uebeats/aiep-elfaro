<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;
    public $table = 'articulos';

    protected $fillable = [
        'title',
        'content',
        'image',
        'categoria_id',
        'is_featured',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }
}
