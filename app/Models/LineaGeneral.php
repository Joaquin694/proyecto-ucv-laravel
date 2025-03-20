<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineaGeneral extends Model
{
    protected $table = 'linea_general';
    protected $primaryKey = 'id_linea_general';
    public $timestamps = true;

    protected $fillable = [
        'nombre_linea_general',
        'id_producto'
    ];

    public function producto()
    {
        return $this->belongsTo(ProductoInvestigacion::class, 'id_producto');
    }

    public function lineaInvestigacionEspecifica()
    {
        return $this->hasMany(LineaInvestigacionEspecifica::class, 'id_linea_general');
    }
}