<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'student_name'=>'Doroty Lara',
                'student_gender'=>'F',
                'student_age'=> 17,
                'student_email'=>'dorotyef@gmail.com',
                'student_phone'=>'3125485548',
                'program_id'=>'3',
                'neighborhood_id'=>'4'
            ],

            [
                'student_name'=>'Ethan Beltrán',
                'student_gender'=>'M',
                'student_age'=> 24,
                'student_email'=>'ethantran@gmail.com',
                'student_phone'=>'1324584855',
                'program_id'=>'4',
                'neighborhood_id'=>'5'
            ],

            [
                'student_name'=>'Virginia Restrepo',
                'student_gender'=>'F',
                'student_age'=> 18,
                'student_email'=>'virginiarepo@gmail.com',
                'student_phone'=>'3054562215',
                'program_id'=>'6',
                'neighborhood_id'=>'2'
            ],

            [
                'student_name'=>'Yaneth Ochoa',
                'student_gender'=>'F',
                'student_age'=> 21,
                'student_email'=>'yanechoa@gmail.com',
                'student_phone'=>'3144454506',
                'program_id'=>'1',
                'neighborhood_id'=>'3'
            ],

            [
                'student_name'=>'Argemiro Oquendo',
                'student_gender'=>'M',
                'student_age'=> 25,
                'student_email'=>'argendo@gmail.com',
                'student_phone'=>'3178838260',
                'program_id'=>'2',
                'neighborhood_id'=>'1'
            ],

            [
                'student_name'=>'Henry Mora',
                'student_gender'=>'M',
                'student_age'=> 30,
                'student_email'=>'henora@gmail.com',
                'student_phone'=>'3118163714',
                'program_id'=>'5',
                'neighborhood_id'=>'6'
            ]
        ];

        DB::table('student')->insert($students);
    }
}
