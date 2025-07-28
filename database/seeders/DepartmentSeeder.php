<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departmets = [
            [
                'department_name'=>'Sistemas digitales',
                'faculty_id'=>'1'
            ],

            [
                'department_name'=>'Mecánica',
                'faculty_id'=>'1'
            ],

            [
                'department_name'=>'Producción',
                'faculty_id'=>'2'
            ],

            [
                'department_name'=>'Eléctrica',
                'faculty_id'=>'1'
            ],

            [
                'department_name'=>'Fundamentación Básica',
                'faculty_id'=>'3'
            ],

            [
                'department_name'=>'Posgrados',
                'faculty_id'=>'3'
            ],

        ];

        DB::table('department')->insert($departmets);
    }
}
