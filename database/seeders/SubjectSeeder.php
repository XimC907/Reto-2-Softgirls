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
        $subjects = [
            [
                'subject_name'=>'Sistemas de propulsión',
                'credits'=>2
            ],

            [
                'subject_name'=>'Compras y aprovisionamiento',
                'credits'=>4
            ],

            [
                'subject_name'=>'Estática',
                'credits'=>3
            ],

            [
                'subject_name'=>'Seguridad Informática',
                'credits'=>4
            ],

            [
                'subject_name'=>'Preproducción Audiovisual',
                'credits'=>2
            ],

            [
                'subject_name'=>'Programación Orientada a Objetos',
                'credits'=>4
            ]
        ];

        DB::table('subject')->insert($subjects);
    }
}
