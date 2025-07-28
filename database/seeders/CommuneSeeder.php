<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $communes = [
        [
            'commune_name' => 'Aranjuez'
        ],

        [
            'commune_name' => 'Villa Hermosa'
        ],

        [
            'commune_name' => 'Belén'
        ],

        [
            'commune_name' => 'Castilla'
        ],

        [
            'commune_name' => 'Manrique'
        ],

        [
            'commune_name' => 'Robledo'
        ],
            
        ];

        DB::table('commune')->insert($communes);
    }
}
