<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id('likeID'); // Primary key for likes table
            $table->date('tanggalLike'); // Date of the like
            
            // Foreign key to photos table, referencing 'fotoID'
            $table->foreignId('fotoID')
                ->constrained('photos', 'fotoID') // 'photos' table with 'fotoID' column
                ->onDelete('cascade'); // Cascade delete if photo is deleted

            // Foreign key to users table, referencing 'userID'
            $table->foreignId('userID')
                ->constrained('users', 'userID') // 'users' table with 'userID' column
                ->onDelete('cascade'); // Cascade delete if user is deleted
            
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('likes'); // Drop the likes table on rollback
    }
};
