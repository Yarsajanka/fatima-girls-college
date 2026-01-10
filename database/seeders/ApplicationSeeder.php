<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;
use App\Models\Program;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = Program::all();

        Application::create([
            'application_id' => 'FGC2025001',
            'program_id' => $programs->first()->id,
            'full_name' => 'Ayesha Khan',
            'date_of_birth' => '2000-01-01',
            'cnic' => '12345-6789012-3',
            'gender' => 'Female',
            'religion' => 'Islam',
            'nationality' => 'Pakistani',
            'address' => '123 Main Street, City',
            'phone' => '0300-1234567',
            'email' => 'ayesha@example.com',
            'father_name' => 'Ahmed Khan',
            'father_cnic' => '12345-6789012-4',
            'father_occupation' => 'Teacher',
            'father_phone' => '0300-1234568',
            'mother_name' => 'Fatima Khan',
            'mother_occupation' => 'Housewife',
            'previous_school' => 'City Public School',
            'board' => 'BISE Lahore',
            'grade' => 'Matric',
            'marks_obtained' => 850,
            'total_marks' => 1100,
            'percentage' => 77.27,
            'status' => 'pending',
            'submitted_at' => now(),
        ]);

        Application::create([
            'application_id' => 'FGC2025002',
            'program_id' => $programs->skip(1)->first()->id,
            'full_name' => 'Fatima Ahmed',
            'date_of_birth' => '2001-02-02',
            'cnic' => '23456-7890123-4',
            'gender' => 'Female',
            'religion' => 'Islam',
            'nationality' => 'Pakistani',
            'address' => '456 Oak Avenue, City',
            'phone' => '0300-2345678',
            'email' => 'fatima@example.com',
            'father_name' => 'Ali Ahmed',
            'father_cnic' => '23456-7890123-5',
            'father_occupation' => 'Engineer',
            'father_phone' => '0300-2345679',
            'mother_name' => 'Aisha Ahmed',
            'mother_occupation' => 'Doctor',
            'previous_school' => 'Lahore Grammar School',
            'board' => 'BISE Lahore',
            'grade' => 'Matric',
            'marks_obtained' => 900,
            'total_marks' => 1100,
            'percentage' => 81.82,
            'status' => 'approved',
            'submitted_at' => now()->subDays(5),
        ]);

        Application::create([
            'application_id' => 'FGC2025003',
            'program_id' => $programs->skip(2)->first()->id,
            'full_name' => 'Sara Ali',
            'date_of_birth' => '2002-03-03',
            'cnic' => '34567-8901234-5',
            'gender' => 'Female',
            'religion' => 'Islam',
            'nationality' => 'Pakistani',
            'address' => '789 Pine Road, City',
            'phone' => '0300-3456789',
            'email' => 'sara@example.com',
            'father_name' => 'Hassan Ali',
            'father_cnic' => '34567-8901234-6',
            'father_occupation' => 'Businessman',
            'father_phone' => '0300-3456780',
            'mother_name' => 'Zara Ali',
            'mother_occupation' => 'Teacher',
            'previous_school' => 'Beaconhouse School',
            'board' => 'Federal Board',
            'grade' => 'Matric',
            'marks_obtained' => 950,
            'total_marks' => 1100,
            'percentage' => 86.36,
            'status' => 'rejected',
            'remarks' => 'Insufficient marks for the program',
            'submitted_at' => now()->subDays(10),
        ]);
    }
}
