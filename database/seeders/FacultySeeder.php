<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculties = [
            [
                'faculty_name'=>'Ingeniería'
            ],

            [
                'faculty_name'=>'Producción y Diseño'
            ],

            [
                'faculty_name'=>'Vicerrectoría Académica'
            ]
        ];

        DB::table('faculty')->insert($faculties);
    }
}
