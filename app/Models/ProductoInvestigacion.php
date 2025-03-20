<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoInvestigacion extends Model
{
    protected $table = 'producto_investigacion';
    protected $primaryKey = 'id_producto';
    public $timestamps = true;

    protected $fillable = [
        'titulo_producto',
        'tipo_producto',
        'id_estado',
        'anio_publicacion',
        'fecha_publicacion',
        'pagina_inicio',
        'pagina_fin',
        'pagina_total',
        'revisable'
    ];

    // Relaciones:
    public function estado()
    {
        return $this->belongsTo(EstadoInvestigacion::class, 'id_estado');
    }

    public function autoresPrincipales()
    {
        return $this->hasMany(AutorPrincipal::class, 'id_producto');
    }

    public function coautores()
    {
        return $this->hasMany(Coautor::class, 'id_producto');
    }

    public function cuartil()
    {
        return $this->hasMany(Cuartil::class, 'id_producto');
    }

    public function lineaGeneral()
    {
        return $this->hasMany(LineaGeneral::class, 'id_producto');
    }

    public function lineaInvestigacionEspecifica()
    {
        return $this->hasMany(LineaInvestigacionEspecifica::class, 'id_producto');
    }

}