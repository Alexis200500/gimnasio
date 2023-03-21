<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'usuarios';

    protected $primaryKey = 'id';

    protected $fillable = [
    'id',
    'id_tarjeta',
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'fecha_nacimiento',
    'telefono_emergencia',
    'fecha_inscripcion',
    'fecha_pago',
    'fecha_proximo_pago'];
}
