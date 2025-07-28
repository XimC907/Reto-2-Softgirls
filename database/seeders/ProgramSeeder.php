<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'program_name'=>'Ingeniería de Software',
                'department_id'=>'1'
            ],

            [
                'program_name'=>'Tecnología en Animación Digital',
                'department_id'=>'3'
            ],

            [
                'program_name'=>'Tecnología en Gestión del Mantenimiento Aeronáutico',
                'department_id'=>'2'
            ],

            [
                'program_name'=>'Ingeniería en logística',
                'department_id'=>'3'
            ],

            [
                'program_name'=>'Tecnología en Desarrollo de Software',
                'department_id'=>'1'
            ],

            [
                'program_name'=>'Ingeniería Mecánica',
                'department_id'=>'2'
            ]
        ];

        DB::table('program')->insert($programs);
    }
}
