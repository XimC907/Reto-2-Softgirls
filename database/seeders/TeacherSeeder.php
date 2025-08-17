<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teacher')->delete();

        $teachers = [
            [
                'teacher_id'=>'1053912781',
                'teacher_name'=>'Marcela Guerrero',
                'teacher_email'=>'marcegue@gmail.com',
                'teacher_phone'=>'3214568823',
                'teacher_gender'=>'F',
                'department_id'=>'23617'
            ],

            [
                'teacher_id'=>'1289118327',
                'teacher_name'=>'Yimy Campo',
                'teacher_email'=>'yimpo@gmail.com',
                'teacher_phone'=>'3056782136',
                'teacher_gender'=>'M',
                'department_id'=>'54672'
            ],

            [
                'teacher_id'=>'3891267832',
                'teacher_name'=>'Victoria Dederle',
                'teacher_email'=>'vicderle@gmail.com',
                'teacher_phone'=>'3123456712',
                'teacher_gender'=>'F',
                'department_id'=>'56781'
            ],

            [
                'teacher_id'=>'1128377812',
                'teacher_name'=>'Rodrigo Alvarado',
                'teacher_email'=>'rodrado@gmail.com',
                'teacher_phone'=>'3145234782',
                'teacher_gender'=>'M',
                'department_id'=>'18692'
            ],

            [
                'teacher_id'=>'1982673821',
                'teacher_name'=>'Linda Rivera',
                'teacher_email'=>'linvera@gmail.com',
                'teacher_phone'=>'3102678132',
                'teacher_gender'=>'F',
                'department_id'=>'67812'
            ],

            [
                'teacher_id'=>'1209384712',
                'teacher_name'=>'Edwin Muñoz',
                'teacher_email'=>'edñoz@gmail.com',
                'teacher_phone'=>'3172341128',
                'teacher_gender'=>'M',
                'department_id'=>'37891'
            ]
        ];

        DB::table('teacher')->insert($teachers);
    }
}
