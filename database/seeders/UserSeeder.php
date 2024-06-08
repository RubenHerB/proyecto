<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
