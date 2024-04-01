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

        ];

        foreach ($processes as $process) {
            \App\Models\Process::create($process);
        }
    }
}
