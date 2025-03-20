<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineaInvestigacionEspecifica extends Model
{
    protected $table = 'linea_investigacion_especifica';
    protected $primaryKey = 'id_linea_investigacion_especifica';
    public $timestamps = true;

    protected $fillable = [
        'nombre_linea_investigacion_especifica',
        'id_linea_general',
        'id_producto'
    ];

    public function lineaGeneral()
    {
        return $this->belongsTo(LineaGeneral::class, 'id_linea_general');
    }

    public function producto()
    {
        return $this->belongsTo(ProductoInvestigacion::class, 'id_producto');
    }
}