<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'process_id' => 2,
                'name' => 'Operation',
            ],

        ];

        foreach ($sections as $section) {
            \App\Models\Section::create($section);
        }
    }
}
