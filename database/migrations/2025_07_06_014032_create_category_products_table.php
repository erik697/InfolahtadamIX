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
        Schema::disableForeignKeyConstraints();

        Schema::create('category_products', function (Blueprint $table) {
            $table->id();
            // $table->integer('parent_id')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('category_products');
            $table->string('title', 200);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        // Schema::table('category_products', function (Blueprint $table) 
        // {
            
        //     $table->foreign('parent_id')->references('id')->on('category_products');
        // });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_products');
    }
};
