<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $neighborhoods = [
            [
                'neighborhood_name'=>'La Salle',
                'commune_id'=>'5'
            ],

            [
                'neighborhood_name'=>'La Ladera',
                'commune_id'=>'2'
            ],

            [
                'neighborhood_name'=>'Pilarica',
                'commune_id'=>'6'
            ],

            [
                'neighborhood_name'=>'Campo Valdés',
                'commune_id'=>'1'
            ],

            [
                'neighborhood_name'=>'Toscana',
                'commune_id'=>'4'
            ],

            [
                'neighborhood_name'=>'San Bernardo',
                'commune_id'=>'6'
            ]
        ];

        DB::table('neighborhood')->insert($neighborhoods);
    }
}
