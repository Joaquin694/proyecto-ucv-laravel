<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    protected $primaryKey = 'id_autor';
    public $timestamps = true;

    protected $fillable = [
        'nombre_autor',
        'email_autor',
        'password_autor',
        'rol',
    ];

    // Relaciones (ejemplos):
    // Un autor puede ser autor principal de muchos productos
    public function autoresPrincipales()
    {
        return $this->hasMany(AutorPrincipal::class, 'id_autor');
    }

    // Un autor puede ser coautor de muchos productos
    public function coautores()
    {
        return $this->hasMany(Coautor::class, 'id_autor');
    }
}
