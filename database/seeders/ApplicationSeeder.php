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
            'program_id' => $programs->first()->id,
            'first_name' => 'Ayesha',
            'last_name' => 'Khan',
            'cnic' => '12345-6789012-3',
            'email' => 'ayesha@example.com',
            'phone' => '0300-1234567',
            'date_of_birth' => '2000-01-01',
            'address' => '123 Main Street, City',
            'father_name' => 'Ahmed Khan',
            'father_cnic' => '12345-6789012-4',
            'father_phone' => '0300-1234568',
            'matric_marks' => '850/1100',
            'matric_year' => '2018',
            'inter_marks' => '780/1100',
            'inter_year' => '2020',
            'status' => 'pending',
            'application_date' => now(),
        ]);

        Application::create([
            'program_id' => $programs->skip(1)->first()->id,
            'first_name' => 'Fatima',
            'last_name' => 'Ahmed',
            'cnic' => '23456-7890123-4',
            'email' => 'fatima@example.com',
            'phone' => '0300-2345678',
            'date_of_birth' => '2001-02-02',
            'address' => '456 Oak Avenue, City',
            'father_name' => 'Ali Ahmed',
            'father_cnic' => '23456-7890123-5',
            'father_phone' => '0300-2345679',
            'matric_marks' => '900/1100',
            'matric_year' => '2018',
            'inter_marks' => '850/1100',
            'inter_year' => '2020',
            'status' => 'approved',
            'application_date' => now()->subDays(5),
        ]);

        Application::create([
            'program_id' => $programs->skip(2)->first()->id,
            'first_name' => 'Sara',
            'last_name' => 'Ali',
            'cnic' => '34567-8901234-5',
            'email' => 'sara@example.com',
            'phone' => '0300-3456789',
            'date_of_birth' => '2002-03-03',
            'address' => '789 Pine Road, City',
            'father_name' => 'Hassan Ali',
            'father_cnic' => '34567-8901234-6',
            'father_phone' => '0300-3456780',
            'matric_marks' => '950/1100',
            'matric_year' => '2019',
            'inter_marks' => '920/1100',
            'inter_year' => '2021',
            'status' => 'rejected',
            'application_date' => now()->subDays(10),
        ]);
    }
}
