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
        DB::table('commune')->delete();

        $communes = [
        [
            'commune_id' => '05002',
            'commune_name' => 'Aranjuez'
        ],

        [
            'commune_id' => '05012',
            'commune_name' => 'Villa Hermosa'
        ],

        [
            'commune_id' => '05026',
            'commune_name' => 'Belén'
        ],

        [
            'commune_id' => '05042',
            'commune_name' => 'Castilla'
        ],

        [
            'commune_id' => '05001',
            'commune_name' => 'Manrique'
        ],

        [
            'commune_id' => '05003',
            'commune_name' => 'Robledo'
        ],
            
        ];

        DB::table('commune')->insert($communes);
    }
}
