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
        DB::table('program')->delete();

        $programs = [
            [
                'program_id'=>'107276',
                'program_name'=>'Ingeniería de Software',
                'department_id'=>'23617'
            ],

            [
                'program_id'=>'103524',
                'program_name'=>'Tecnología en Animación Digital',
                'department_id'=>'18692'
            ],

            [
                'program_id'=>'104794',
                'program_name'=>'Tecnología en Gestión del Mantenimiento Aeronáutico',
                'department_id'=>'54672'
            ],

            [
                'program_id'=>'108434',
                'program_name'=>'Ingeniería en logística',
                'department_id'=>'18692'
            ],

            [
                'program_id'=>'102570',
                'program_name'=>'Tecnología en Desarrollo de Software',
                'department_id'=>'23617'
            ],

            [
                'program_id'=>'106410',
                'program_name'=>'Ingeniería Mecánica',
                'department_id'=>'54672'
            ]
        ];

        DB::table('program')->insert($programs);
    }
}
