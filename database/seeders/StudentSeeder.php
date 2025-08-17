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
        DB::table('student')->delete();

        $students = [
            [
                'student_id'=>'1015072967',
                'student_name'=>'Doroty Lara',
                'student_gender'=>'F',
                'student_age'=> 17,
                'student_email'=>'dorotyef@gmail.com',
                'student_phone'=>'3125485548',
                'program_id'=>'104794',
                'neighborhood_id'=>'2936781699'
            ],

            [
                'student_id'=>'1017892334',
                'student_name'=>'Ethan Beltrán',
                'student_gender'=>'M',
                'student_age'=> 24,
                'student_email'=>'ethantran@gmail.com',
                'student_phone'=>'1324584855',
                'program_id'=>'108434',
                'neighborhood_id'=>'7689163781'
            ],

            [
                'student_id'=>'1033498567',
                'student_name'=>'Virginia Restrepo',
                'student_gender'=>'F',
                'student_age'=> 18,
                'student_email'=>'virginiarepo@gmail.com',
                'student_phone'=>'3054562215',
                'program_id'=>'106410',
                'neighborhood_id'=>'4089121157'
            ],

            [
                'student_id'=>'1239881125',
                'student_name'=>'Yaneth Ochoa',
                'student_gender'=>'F',
                'student_age'=> 21,
                'student_email'=>'yanechoa@gmail.com',
                'student_phone'=>'3144454506',
                'program_id'=>'107276',
                'neighborhood_id'=>'1982634518'
            ],

            [
                'student_id'=>'1045671123',
                'student_name'=>'Argemiro Oquendo',
                'student_gender'=>'M',
                'student_age'=> 25,
                'student_email'=>'argendo@gmail.com',
                'student_phone'=>'3178838260',
                'program_id'=>'103524',
                'neighborhood_id'=>'2456718871'
            ],

            [
                'student_id'=>'1083442310',
                'student_name'=>'Henry Mora',
                'student_gender'=>'M',
                'student_age'=> 30,
                'student_email'=>'henora@gmail.com',
                'student_phone'=>'3118163714',
                'program_id'=>'102570',
                'neighborhood_id'=>'3829176266'
            ]
        ];

        DB::table('student')->insert($students);
    }
}
