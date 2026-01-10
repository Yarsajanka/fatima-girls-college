<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'name' => 'F.A',
                'code' => 'FA',
                'description' => 'Faculty of Arts - 1 year program',
                'duration_years' => 1,
                'capacity' => 50,
                'eligibility_criteria' => 'Matriculation with minimum 60% marks',
                'fee_per_year' => 15000,
                'is_active' => true,
            ],
            [
                'name' => 'F.Sc Pre-Medical',
                'code' => 'FSC_PM',
                'description' => 'Faculty of Science Pre-Medical - 2 year program',
                'duration_years' => 2,
                'capacity' => 40,
                'eligibility_criteria' => 'Matric Science with minimum 65% marks',
                'fee_per_year' => 20000,
                'is_active' => true,
            ],
            [
                'name' => 'F.Sc Pre-Engineering',
                'code' => 'FSC_PE',
                'description' => 'Faculty of Science Pre-Engineering - 2 year program',
                'duration_years' => 2,
                'capacity' => 40,
                'eligibility_criteria' => 'Matric Science with minimum 65% marks',
                'fee_per_year' => 20000,
                'is_active' => true,
            ],
            [
                'name' => 'ICS',
                'code' => 'ICS',
                'description' => 'Intermediate in Computer Science - 2 year program',
                'duration_years' => 2,
                'capacity' => 35,
                'eligibility_criteria' => 'Matric with minimum 60% marks',
                'fee_per_year' => 18000,
                'is_active' => true,
            ],
            [
                'name' => 'ICOM',
                'code' => 'ICOM',
                'description' => 'Intermediate in Commerce - 2 year program',
                'duration_years' => 2,
                'capacity' => 45,
                'eligibility_criteria' => 'Matric with minimum 60% marks',
                'fee_per_year' => 16000,
                'is_active' => true,
            ],
            [
                'name' => 'BS Computer Science',
                'code' => 'BSCS',
                'description' => 'Bachelor of Science in Computer Science - 4 year program',
                'duration_years' => 4,
                'capacity' => 30,
                'eligibility_criteria' => 'Intermediate with minimum 50% marks',
                'fee_per_year' => 35000,
                'is_active' => true,
            ],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
