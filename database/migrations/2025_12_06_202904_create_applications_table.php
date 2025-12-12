<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_id')->unique(); // Auto-generated unique ID like "FGC2025001"

            // Personal Information
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('cnic')->unique(); // Pakistani CNIC
            $table->enum('gender', ['Male', 'Female']);
            $table->string('religion')->default('Islam');
            $table->string('nationality')->default('Pakistani');
            $table->text('address');
            $table->string('phone');
            $table->string('email')->unique();

            // Parent/Guardian Information
            $table->string('father_name');
            $table->string('father_cnic');
            $table->string('father_occupation')->nullable();
            $table->string('father_phone');
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();

            // Academic Information
            $table->string('previous_school');
            $table->string('board'); // e.g., "BISE Lahore", "Federal Board"
            $table->string('grade'); // e.g., "Matric", "O-Levels"
            $table->decimal('marks_obtained', 8, 2);
            $table->decimal('total_marks', 8, 2);
            $table->decimal('percentage', 5, 2);

            // Program Selection
            $table->foreignId('program_id')->constrained('programs');

            // Documents
            $table->string('photo_path')->nullable();
            $table->string('cnic_copy_path')->nullable();
            $table->string('marksheet_path')->nullable();
            $table->string('other_docs_path')->nullable();

            // Status and Remarks
            $table->enum('status', ['pending', 'under_review', 'approved', 'rejected', 'interview_scheduled'])->default('pending');
            $table->text('remarks')->nullable();
            $table->timestamp('submitted_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
