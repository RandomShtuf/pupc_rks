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
                'name' => 'Student Process',
            ],
            [
                'name' => 'Academic Process',
            ],
        ];

        foreach ($processes as $process) {
            \App\Models\Process::create($process);
        }
    }
}
