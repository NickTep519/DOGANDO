<?php

use App\Models\Post;
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
        Schema::create('tracking_positions', function (Blueprint $table) {
            $table->id();
            $table->decimal('latitude', 10, 8) ; 
            $table->decimal('longitude', 11, 8) ; 
            $table->timestamps();

            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete() ; 
            $table->foreignIdFor(Post::class)->nullable()->constrained()->cascadeOnDelete() ; 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking_positions');
    }
};
