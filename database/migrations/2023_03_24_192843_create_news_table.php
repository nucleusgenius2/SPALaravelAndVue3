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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
			$table->string('name', 255)->comment('Название новости');
			$table->text('content')->comment('Содержимое новости');
			$table->string('short_description', 255)->comment('Краткое описание новости');
			$table->string('seo_title', 255);
			$table->string('seo_description', 300);
			$table->string('img', 400)->comment('Ссылка на изображение');
			$table->integer('id_category');
			$table->string('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
