<?php

use App\Models\User;
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
        Schema::dropIfExists('blogs') ; 

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title') ; 
            $table->string('slug') ; 
            $table->longText('content') ; 
            $table->timestamps();

            $table->foreignIdFor(User::class, 'admin_id')->nullable()->constrained('users')->cascadeOnDelete() ; 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
