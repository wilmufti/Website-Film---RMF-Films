<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    public function up()
    {
        // Tabel dari rmf_films.sql
        Schema::create('anime_metadata', function (Blueprint $table) {
            $table->string('anime_name')->primary();
            $table->enum('source', ['tv_series', 'movies', 'films']);
            $table->text('description')->nullable();
            $table->string('genres')->nullable();
            $table->json('characters')->nullable();
        });

        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('poster')->nullable();
            $table->string('rating', 50)->nullable();
            $table->enum('category', ['trending', 'popular', 'other'])->default('other');
        });

        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar')->nullable();
            $table->year('tahun')->nullable();
            $table->decimal('rating', 3, 1)->nullable();
        });

        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image_url');
        });

        Schema::create('people_details', function (Blueprint $table) {
            $table->id('person_id');
            $table->string('name');
            $table->string('profile_image_url', 512)->nullable();
            $table->string('known_for_department', 100)->nullable();
            $table->integer('known_credits_count')->nullable();
            $table->string('gender', 20)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->text('biography')->nullable();
            $table->json('also_known_as')->nullable();
            $table->json('known_for_films')->nullable();
            $table->json('film_credits')->nullable();
        });

        Schema::create('tv_series', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar')->nullable();
            $table->year('tahun')->nullable();
            $table->decimal('rating', 4, 2)->nullable();
        });

        // Tabel bawaan Laravel untuk Admin
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anime_metadata');
        Schema::dropIfExists('films');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('people');
        Schema::dropIfExists('people_details');
        Schema::dropIfExists('tv_series');
        Schema::dropIfExists('users');
    }
}