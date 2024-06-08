<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
         DB::table('products')->insert(
            [
                'name' => 'Botella llena',
                'precio' => 3,
                'imagen' => 'botella-llena.jpg',
            ]);
        DB::table('products')->insert(
            [
                'name' => 'Botella vacia',
                'precio' => 0.9,
                'imagen' => 'botella-vacia.png',
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Vaso',
                'precio' => 1.1,
                'imagen' => 'vaso.jpg',
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Kit de sidra',
                'precio' => 35.8,
                'imagen' => 'kit.png',
            ]

        );

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
            ]);}

            DB::table('users')->insert([
                'name'=>'Usuario',
                'email'=>'elsidrerouser@yopmail.com',
                'password' => Hash::make('Usuario'),
            ]);
    
            DB::table('users')->insert([
                'name'=>'Usuario2',
                'email'=>'elsidrerouser2@yopmail.com',
                'password' => Hash::make('Usuario2'),
            ]);
            DB::table('users')->insert([
                'name'=>'Usuario3',
                'email'=>'elsidrerouser3@yopmail.com',
                'password' => Hash::make('Usuario3'),
                
            ]);
            DB::table('users')->insert([
                'name'=>'Trabajador',
                'email'=>'elsidrerotrabajador@yopmail.com',
                'password' => Hash::make('Trabajador'),
                'role' => 1
            ]);
            DB::table('users')->insert([
                'name'=>'Trabajador2',
                'email'=>'elsidrerotrabajador2@yopmail.com',
                'password' => Hash::make('Trabajador2'),
                'role' => 1
            ]);
            DB::table('users')->insert([
                'name'=>'Trabajador3',
                'email'=>'elsidrerotrabajador3@yopmail.com',
                'password' => Hash::make('Trabajador3'),
                'role' => 1
            ]);
    }
}
