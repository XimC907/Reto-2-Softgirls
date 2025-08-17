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
        DB::table('score')->delete();

        $scores = [
            [
                'score_id'=>'27835',
                'score1'=>3.8,
                'score2'=>4.2,
                'score3'=>2.5,
                'final_score'=>3.5,
                'state'=>'P',
                'subject_id'=>'18902',
                'teacher_id'=>'3891267832',
                'student_id'=>'1017892334'
            ],

            [
                'score_id'=>'78354',
                'score1'=>4.6,
                'score2'=>3.0,
                'score3'=>4.5,
                'final_score'=>4.0,
                'state'=>'P',
                'subject_id'=>'16921',
                'teacher_id'=>'1053912781',
                'student_id'=>'1083442310'
            ],

            [
                'score_id'=>'34678',
                'score1'=>2.4,
                'score2'=>1.3,
                'score3'=>4.2,
                'final_score'=>2.6,
                'state'=>'F',
                'subject_id'=>'28912',
                'teacher_id'=>'1289118327',
                'student_id'=>'1015072967'
            ],

            [
                'score_id'=>'10284',
                'score1'=>4.7,
                'score2'=>5.0,
                'score3'=>4.3,
                'final_score'=>4.6,
                'state'=>'P',
                'subject_id'=>'14569',
                'teacher_id'=>'1053912781',
                'student_id'=>'1239881125'
            ],

            [
                'score_id'=>'48291',
                'score1'=>4.4,
                'score2'=>3.0,
                'score3'=>2.0,
                'final_score'=>3.1,
                'state'=>'P',
                'subject_id'=>'10821',
                'teacher_id'=>'1289118327',
                'student_id'=>'1033498567'
            ],

            [
                'score_id'=>'68391',
                'score1'=>2.1,
                'score2'=>5.0,
                'score3'=>4.8,
                'final_score'=>3.9,
                'state'=>'P',
                'subject_id'=>'19273',
                'teacher_id'=>'1128377812',
                'student_id'=>'1045671123'
            ]
        ];

        DB::table('score')->insert($scores);
    }
}
