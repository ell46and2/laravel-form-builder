<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('question_attributes', function (Blueprint $table) {
            $table->id();

            $table->integer('order');
            $table->text('label');
            $table->string('value');

            $table->foreignId('form_question_id')->index()->constrained();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('question_attributes');
    }
};
