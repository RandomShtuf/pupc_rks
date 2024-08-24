<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $processes = [
            [
                'title' => 'CURRICULUM DESIGN AND DEVELOPMENT',
                'description' => 'PURPOSE OF CURRICULUM DESIGN AND DEVELOPMENT
                                    1. The university\'s curriculum planning and development process aims to achieve
                                    effectively and efficiently designed and constructed curricula compliant to the
                                    requirements and standards of the government, industry, professional organizations,
                                    national and international accredeting bodies;
                                    2. It promotes the participation and ownership of all stakeholders to ensure the
                                    relevance and responsiveness of the curricula to thier needs and expectations.
                                    3. Alignment with the univesity\'s strategic direction refelected in the PUP vision,
                                    mission, philosophy, goals, and objectives is a priority during the curriculum planning
                                    and development process.',
            ],

            [
                'title' => 'SYLLABUS/COURSE GUIDE PREPARATION',
                'description' => 'PURPOSE OF SYLLABUS/COURSE GUIDE PREPARATION
                                    1. The university’s curriculum planning and development process aims to achieve
                                    effectively and efficiently designed and constructed curricula compliant to the
                                    requirements and standards of the government, industry, professional
                                    organizations, national and international accrediting bodies;
                                    2. It promotes the participation and ownership of all stakeholders to ensure the
                                    relevance and responsiveness of the curricula to their needs and expectations.
                                    3. Alignment with the university’s strategic direction reflected in the PUP vision,
                                    mission, philosophy, goals and objectives is a priority during the curriculum planning
                                    and development process.'
            ],

            [
                'title' => 'COURSE OFFERING PREPARATION',
                'description' => 'PURPOSE OF COURSE OFFERING PREPARATION
                                   `1. To ensure that the course offering process required and determined as
                                    necessary for the effectiveness of its QMS is properly identified, written in
                                    preferred language, and reviewed and authorized prior to its implementation.
                                    2. To ensure that any change or modification to existing course offering
                                    documented information is reviewed and approved unless otherwise
                                    specifically stated.
                                    3. To ensure that obsolete course offering process information are withdrawn
                                    from all points of issue or use.'
            ],

            [
                'title' => 'CLASSROOM MANAGEMENT',
                'description' => 'PURPOSE OF CLASSROOM MANAGEMENT
                                    1. Classroom Management provides venue for conducive learning of all
                                    stakeholders. This complies to the memorandum of the Commission on Higher
                                    Education, NBC 461 evaluation instrument, and CHED guidelines.
                                    2. Classroom Management focuses on setting the tone for the classroom’s
                                    efficient and effective delivery of academic services for the students and faculty
                                    members.
                                    3. The goals are to create, support, assist, and facilitate the flow of learning
                                    activities to maintain a positive and productive learning environment for the
                                    students in the synchronous and asynchronous sessions of classes.'
            ]
        ];

        foreach ($processes as $process) {
            \App\Models\Process::create($process);
        }
    }
}
