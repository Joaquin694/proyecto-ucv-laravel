<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuartil extends Model
{
    protected $table = 'cuartil';
    protected $primaryKey = 'id_cuartil';
    public $timestamps = true;

    protected $fillable = [
        'nombre_cuartil',
        'id_producto'
    ];

    public function producto()
    {
        return $this->belongsTo(ProductoInvestigacion::class, 'id_producto');
    }
}