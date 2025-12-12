<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Announcements
        Content::create([
            'type' => 'announcement',
            'title' => 'Admission Open for 2024',
            'content' => 'Applications are now open for all programs. Apply before the deadline.',
            'is_active' => true,
            'published_at' => now(),
        ]);

        Content::create([
            'type' => 'announcement',
            'title' => 'New Campus Facilities',
            'content' => 'Exciting updates on our new library and computer labs.',
            'is_active' => true,
            'published_at' => now()->subDays(2),
        ]);

        // Gallery
        Content::create([
            'type' => 'gallery',
            'title' => 'Campus View',
            'image_path' => 'gallery/campus.jpg',
            'is_active' => true,
        ]);

        Content::create([
            'type' => 'gallery',
            'title' => 'Classroom',
            'image_path' => 'gallery/classroom.jpg',
            'is_active' => true,
        ]);

        Content::create([
            'type' => 'gallery',
            'title' => 'Library',
            'image_path' => 'gallery/library.jpg',
            'is_active' => true,
        ]);

        // About Us
        Content::create([
            'type' => 'vision',
            'title' => 'Our Vision',
            'content' => 'To be a leading institution that empowers young women with quality education, fostering their intellectual, social, and personal development in a supportive and inclusive environment.',
            'is_active' => true,
        ]);

        Content::create([
            'type' => 'mission',
            'title' => 'Our Mission',
            'content' => 'We are committed to providing comprehensive education that combines academic excellence with character building, preparing our students to become confident, responsible, and successful individuals who contribute positively to society.',
            'is_active' => true,
        ]);

        Content::create([
            'type' => 'history',
            'title' => 'Our History',
            'content' => 'Founded in 1995, Fatima Girls College has been a cornerstone of women\'s education in the region. Starting with a modest enrollment of 150 students, we have grown to serve over 2000 students annually across various programs. Over the years, we have continuously upgraded our facilities, curriculum, and teaching methodologies to meet the evolving needs of education. Our commitment to quality has earned us recognition as one of the premier institutions for girls\' education.',
            'is_active' => true,
        ]);

        Content::create([
            'type' => 'principal_message',
            'title' => 'Principal\'s Message',
            'content' => '"At Fatima Girls College, we believe in nurturing the potential of every student. Our dedicated faculty and modern facilities create an environment where girls can thrive academically and personally. We are proud of our tradition of excellence and look forward to shaping the future leaders of tomorrow." - Dr. Ayesha Khan, Principal, Fatima Girls College',
            'image_path' => 'principals/principal.jpg',
            'is_active' => true,
        ]);

        // Admissions
        Content::create([
            'type' => 'admission_schedule',
            'title' => 'Admission Schedule',
            'content' => 'Admission applications open: January 1, 2024. Last date for submission: March 31, 2024. Entrance test: April 15, 2024. Results announcement: May 1, 2024.',
            'is_active' => true,
        ]);

        Content::create([
            'type' => 'eligibility_criteria',
            'title' => 'Eligibility Criteria',
            'content' => 'For FA/FSC: Matriculation with minimum 60% marks. For ICS: Matric Science with minimum 65% marks. For ICOM: Matric with minimum 60% marks. For BS: Intermediate with minimum 50% marks.',
            'is_active' => true,
        ]);

        Content::create([
            'type' => 'required_documents',
            'title' => 'Required Documents',
            'content' => '1. Matriculation certificate. 2. Intermediate mark sheet (for BS). 3. CNIC copy. 4. Passport size photos (4). 5. Medical certificate.',
            'is_active' => true,
        ]);

        Content::create([
            'type' => 'admission_guidelines',
            'title' => 'Admission Guidelines',
            'content' => 'All applications must be submitted online. Incomplete applications will not be considered. Admission is based on merit and entrance test performance.',
            'is_active' => true,
        ]);

        // Contact
        Content::create([
            'type' => 'contact',
            'title' => 'Contact Details',
            'content' => 'Address: Fatima Girls College, Main Road, City. Phone: +92-123-4567890. Email: info@fatimagirlscollege.edu.pk. Website: www.fatimagirlscollege.edu.pk',
            'is_active' => true,
        ]);
    }
}
