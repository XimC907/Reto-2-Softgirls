<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scores = [
            [
                'score1'=>3.8,
                'score2'=>4.2,
                'score3'=>2.5,
                'final_score'=>3.5,
                'state'=>'P',
                'subject_id'=>'5',
                'teacher_id'=>'3',
                'student_id'=>'2'
            ],

            [
                'score1'=>4.6,
                'score2'=>3.0,
                'score3'=>4.5,
                'final_score'=>4.0,
                'state'=>'P',
                'subject_id'=>'6',
                'teacher_id'=>'1',
                'student_id'=>'6'
            ],

            [
                'score1'=>2.4,
                'score2'=>1.3,
                'score3'=>4.2,
                'final_score'=>2.6,
                'state'=>'F',
                'subject_id'=>'1',
                'teacher_id'=>'2',
                'student_id'=>'1'
            ],

            [
                'score1'=>4.7,
                'score2'=>5.0,
                'score3'=>4.3,
                'final_score'=>4.6,
                'state'=>'P',
                'subject_id'=>'4',
                'teacher_id'=>'1',
                'student_id'=>'4'
            ],

            [
                'score1'=>4.4,
                'score2'=>3.0,
                'score3'=>2.0,
                'final_score'=>3.1,
                'state'=>'P',
                'subject_id'=>'3',
                'teacher_id'=>'2',
                'student_id'=>'3'
            ],

            [
                'score1'=>2.1,
                'score2'=>5.0,
                'score3'=>4.8,
                'final_score'=>3.9,
                'state'=>'P',
                'subject_id'=>'2',
                'teacher_id'=>'4',
                'student_id'=>'5'
            ]
        ];

        DB::table('score')->insert($scores);
    }
}
