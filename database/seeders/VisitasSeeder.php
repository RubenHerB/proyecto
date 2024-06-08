<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisitasSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $visitas=[[3, '2024-06-06 08:47:35', '2024-06-06 08:47:35', 1, 1, 2, '2024-06-21', 0],
[4, '2024-06-06 08:48:14', '2024-06-06 08:48:14', 1, 1, 1, '2024-06-22', 0],
[5, '2024-06-06 08:48:26', '2024-06-06 11:42:26', 1, 1, 1, '2024-06-22', 1],
[6, '2024-06-06 08:49:04', '2024-06-06 11:42:02', 1, 3, 1, '2024-06-08', 1],
[7, '2024-06-06 08:50:03', '2024-06-06 08:50:03', 1, 1, 1, '2024-06-22', 0],
[8, '2024-06-06 09:53:50', '2024-06-06 09:53:50', 1, 3, 1, '2024-06-08', 0],
[9, '2024-06-06 10:02:57', '2024-06-06 10:02:57', 1, 1, 2, '2024-06-08', 0],
[10, '2024-06-06 12:49:01', '2024-06-06 12:49:01', 4, 3, 2, '2024-06-05', 0],
[11, '2024-06-06 12:49:25', '2024-06-06 12:49:25', 4, 1, 1, '2024-06-05', 0],
[12, '2024-06-06 12:49:33', '2024-06-06 13:21:54', 4, 1, 1, '2024-06-22', 1]];
foreach ($visitas as $visita) {
    DB::table('visitas')->insert([
        'id'=> $visita[0],
        'created_at'=> $visita[1],
        'updated_at' => $visita[2],
        'idUsuario' => $visita[3],
        'cantidad_personas'=> $visita[4],
        'horario'=> $visita[5],
        'dia_visita'=> $visita[6],
        'status'=> $visita[7],
    ]);
    }

    }
}
