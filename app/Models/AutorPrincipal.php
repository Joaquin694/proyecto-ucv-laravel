<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutorPrincipal extends Model
{
    protected $table = 'autores_principales';
    protected $primaryKey = 'id_autor_principal';
    public $timestamps = true;

    protected $fillable = [
        'id_autor',
        'id_producto'
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'id_autor');
    }

    public function producto()
    {
        return $this->belongsTo(ProductoInvestigacion::class, 'id_producto');
    }
}