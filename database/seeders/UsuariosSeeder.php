<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuarios;
use Carbon\Carbon;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      usuarios::insert([
        [
          'id_tarjeta'=>mt_rand(1000000000000000,10000000000000000),
          'nombre'=>'Alexis',
          'apellido_paterno'=>'Morales',
          'apellido_materno'=>'Gómez',
          'fecha_nacimiento'=>'2000-05-20',
          'telefono_emergencia'=>'1234567890',
          'fecha_inscripcion'=>'2023-03-18',
          'fecha_pago'=>'2023-03-18',
          'fecha_proximo_pago'=>'2023-04-18',
          'created_at'=>Carbon::now(),
          'updated_at'=>Carbon::now(),
        ]
      ]);
    }
}
