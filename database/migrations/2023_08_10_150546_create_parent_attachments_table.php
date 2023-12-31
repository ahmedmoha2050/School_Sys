<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('parent_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->foreignId('parent_id')->constrained('student_parents');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parent_attachments');
    }
};
