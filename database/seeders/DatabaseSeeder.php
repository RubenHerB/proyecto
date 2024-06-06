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
