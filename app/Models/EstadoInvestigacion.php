<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoInvestigacion extends Model
{
    protected $table = 'estado_investigacion';
    protected $primaryKey = 'id_estado';
    public $timestamps = true;

    protected $fillable = [
        'estado_investigacion',
    ];

    // Relaciones:
    // Un estado puede tener muchos productos
    public function productos()
    {
        return $this->hasMany(ProductoInvestigacion::class, 'id_estado');
    }
}