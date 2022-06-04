<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Horario;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horario::create(['hora_ini' => '08:00:00', 'hora_fim' => '09:00:00']);
        Horario::create(['hora_ini' => '09:00:00', 'hora_fim' => '10:00:00']);
        Horario::create(['hora_ini' => '10:00:00', 'hora_fim' => '11:00:00']);
        Horario::create(['hora_ini' => '11:00:00', 'hora_fim' => '12:00:00']);
        Horario::create(['hora_ini' => '12:00:00', 'hora_fim' => '13:00:00']);
        Horario::create(['hora_ini' => '13:00:00', 'hora_fim' => '14:00:00']);
        Horario::create(['hora_ini' => '14:00:00', 'hora_fim' => '15:00:00']);
        Horario::create(['hora_ini' => '15:00:00', 'hora_fim' => '16:00:00']);
        Horario::create(['hora_ini' => '16:00:00', 'hora_fim' => '17:00:00']);
        Horario::create(['hora_ini' => '17:00:00', 'hora_fim' => '18:00:00']);
        Horario::create(['hora_ini' => '18:00:00', 'hora_fim' => '19:00:00']);
        Horario::create(['hora_ini' => '19:00:00', 'hora_fim' => '20:00:00']);
    }
}
