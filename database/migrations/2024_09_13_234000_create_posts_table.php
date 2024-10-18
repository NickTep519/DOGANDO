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
        Schema::create ('posts', function (Blueprint $table) {
            $table->id() ;
            $table->string('title') ; 
            $table->longText('description') ; 
            $table->integer('kg') ; 
            $table->integer('price')->nullable() ; 
            $table->string('city_starts') ;
            $table->string('city_ends') ; 
            $table->string('m_transport')->nullable() ; 
            $table->boolean('type')->default(false) ; 
            $table->boolean('status')->default(false) ; 
            $table->timestamp('starts_at')->nullable() ; 
            $table->timestamp('ends_at')->nullable() ; 
            $table->timestamps();

            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete() ; 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
