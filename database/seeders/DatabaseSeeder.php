<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $this->call([
        FacultySeeder::class,
        DepartmentSeeder::class,
        ProgramSeeder::class,
        CommuneSeeder::class,
        NeighborhoodSeeder::class,
        SubjectSeeder::class,
        TeacherSeeder::class,
        StudentSeeder::class,
        ScoreSeeder::class,
        
        
    ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
