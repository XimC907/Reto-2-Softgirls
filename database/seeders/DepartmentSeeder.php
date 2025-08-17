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
        DB::table('department')->delete();

        $departmets = [
            [
                'department_id'=>'23617',
                'department_name'=>'Sistemas digitales',
                'faculty_id'=>'1892567825'
            ],

            [
                'department_id'=>'54672',
                'department_name'=>'Mecánica',
                'faculty_id'=>'1892567825'
            ],

            [
                'department_id'=>'18692',
                'department_name'=>'Producción',
                'faculty_id'=>'1078923345'
            ],

            [
                'department_id'=>'56781',
                'department_name'=>'Eléctrica',
                'faculty_id'=>'1892567825'
            ],

            [
                'department_id'=>'37891',
                'department_name'=>'Fundamentación Básica',
                'faculty_id'=>'1783466211'
            ],

            [
                'department_id'=>'67812',
                'department_name'=>'Posgrados',
                'faculty_id'=>'1783466211'
            ],

        ];

        DB::table('department')->insert($departmets);
    }
}
