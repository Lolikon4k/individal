<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('name');
            $table->string('author');
            $table->unsignedInteger('YearPublishing');
            $table->unsignedInteger('contPages');
            $table->string('imageBook');
            $table->string('bookNameDownload');
            $table->foreignId('id_publisher')->constrained('publishers');
            $table->foreignId('id_AgeRestriction')->constrained('age_restrictions');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
