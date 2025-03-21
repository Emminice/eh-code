<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); 
            $table->foreignIdFor(Employer::class);  
            $table->string('name');
            $table->string('course');
            $table->string('price');
            $table->string('days'); 
            $table->string('schedule')->default('Available'); 
            $table->string('url');
            $table->boolean('featured')->default('false'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
