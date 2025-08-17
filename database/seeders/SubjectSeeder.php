<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subject')->delete();

        $subjects = [
            [
                'subject_id'=>'28912',
                'subject_name'=>'Sistemas de propulsión',
                'credits'=>2
            ],

            [
                'subject_id'=>'19273',
                'subject_name'=>'Compras y aprovisionamiento',
                'credits'=>4
            ],

            [
                'subject_id'=>'10821',
                'subject_name'=>'Estática',
                'credits'=>3
            ],

            [
                'subject_id'=>'14569',
                'subject_name'=>'Seguridad Informática',
                'credits'=>4
            ],

            [
                'subject_id'=>'18902',
                'subject_name'=>'Preproducción Audiovisual',
                'credits'=>2
            ],

            [
                'subject_id'=>'16921',
                'subject_name'=>'Programación Orientada a Objetos',
                'credits'=>4
            ]
        ];

        DB::table('subject')->insert($subjects);
    }
}
