<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('form_questions', function (Blueprint $table) {
            $table->id();

            $table->integer('order'); // maybe unique()
            $table->string('field_type');
            $table->longText('label');

            $table->foreignId('parent_id')->nullable()->index()->constrained('form_questions');
            $table->foreignId('form_section_id')->index()->constrained();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('form_questions');
    }
};
