<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'process_id' => 2,
                'section_id' => 1,
                'name' => 'Curriculum Design and Development'
            ],

            [
                'process_id' => 2,
                'section_id' => 1,
                'name' => 'Syllabus/Course Guide Preparation'
            ],
            [
                'process_id' => 2,
                'section_id' => 1,
                'name' => 'Course Offering Preparation'
            ],
            [
                'process_id' => 2,
                'section_id' => 1,
                'name' => 'Classroom Management'
            ],

            [
                'process_id' => 2,
                'section_id' => 1,
                'name' => 'Test Administration and Evaluation'
            ],
        ];

        foreach ($subjects as $subject) {
            \App\Models\Subject::create($subject);
        }
    }
}
