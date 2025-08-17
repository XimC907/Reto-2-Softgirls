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
        DB::table('neighborhood')->delete();

        $neighborhoods = [
            [
                'neighborhood_id'=>'2456718871',
                'neighborhood_name'=>'La Salle',
                'commune_id'=>'05001'
            ],

            [
                'neighborhood_id'=>'4089121157',
                'neighborhood_name'=>'La Ladera',
                'commune_id'=>'05012'
            ],

            [
                'neighborhood_id'=>'1982634518',
                'neighborhood_name'=>'Pilarica',
                'commune_id'=>'05003'
            ],

            [
                'neighborhood_id'=>'2936781699',
                'neighborhood_name'=>'Campo Valdés',
                'commune_id'=>'05002'
            ],

            [
                'neighborhood_id'=>'7689163781',
                'neighborhood_name'=>'Toscana',
                'commune_id'=>'05042'
            ],

            [
                'neighborhood_id'=>'3829176266',
                'neighborhood_name'=>'San Bernardo',
                'commune_id'=>'05026'
            ]
        ];

        DB::table('neighborhood')->insert($neighborhoods);
    }
}
