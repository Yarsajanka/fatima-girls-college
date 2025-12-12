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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "F.A", "F.Sc Pre-Medical", "ICS", "ICOM", "BS Computer Science"
            $table->string('code')->unique(); // e.g., "FA", "FSC_PM", "ICS", "ICOM", "BSCS"
            $table->text('description')->nullable();
            $table->integer('duration_years'); // 1 for FA, 2 for FSC/ICS/ICOM, 4 for BS
            $table->integer('capacity')->default(50); // Maximum students per program
            $table->text('eligibility_criteria')->nullable();
            $table->decimal('fee_per_year', 10, 2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
