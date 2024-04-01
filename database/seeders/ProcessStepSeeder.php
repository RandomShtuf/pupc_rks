<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $process_steps = [
            [
                'process_id' => 1,
                'title' => 'Receive call for curriculum revision or proposal from the OVPBSC.',
                'description' => 'The Vice President for Academic Affairs issues a call for curriculum proposal
                in response to the issued CMO, current trends, standards, requirements of national and international
                professional organization and accrediting bodies, consistent with the university\'s strategic directions.',
            ],

            [
                'process_id' => 1,
                'title' => 'Convene Curriculum Development Committee (CDC).',
                'description' => 'Issuance of Special order for the composition of CDC',
            ],

            [
                'process_id' => 1,
                'description' => 'Meeting with the Curriculum Development Committee (CDC) members'
            ],

            [
                'process_id' => 1,
                'description' => 'The CDC holds stakeholders\'s consultations with industry, government agencies,
                professional organizations, alumni, faculty, and student; prepares feasibility studies and inventory;
                conducts benchmarking activities and prepares the documentary requirements for the proposal.'
            ],

            [
                'process_id' => 1,
                'title' => 'Design/revise curriculum based on CMO/Benchmaking/University strategic
                directions / Stakeholders\'s consultations.',
                'description' =>'The CDC considers all information and data gathered and prepares the curriculum
                proposal following the prescribed University curriclum proposal format.
                The CDC deliberates the designed proposed curriculum after which the final draft shall be
                endorsed by the Chair to the Curriculum Evaluation Committee (CEC) for deliberation and approval.'
            ],

            [
                'process_id' => 1,
                'description' => 'Endorsement of Proposed Curriculum to Curriculum Evaluation Committee (CEC)
                for evaluation.'
            ],

            [
                'process_id' => 1,
                'title' => 'Return to the CDC for improvement or enhancement.',
                'description' => 'The proposed curriculum shall be returned to the Chair of the CDC if enhancement or
                improvement is recommended.
                If approved, the college Dean endorses the proposal to the Quality Assurance Center to check
                completeness and compliance of documentary requirements.'
            ],

            [
                'process_id' => 1,
                'description' => 'The Quality Assurance Center through the Chief of the Curriculum Planning
                and Development (CPD) section assesses completeness and compliance of the documents submitted
                before endorsement to the University Curriculum Evaluation Committee.

                 If the documents are complete and compliant, the CPD section coordinates with the OVPAA
                 for the presentationschedule of the proposed curriculum to the UCEC.

                 If the documents are complete and compliant, the Dean of the college distributes copies of
                 the documents to the members of the UCEC for review and comment or enhancement in preparation
                 for the deliberation.'
            ],
        ];

        foreach ($process_steps as $process_step) {
            \App\Models\ProcessStep::create($process_step);
        }
    }
}
