<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
