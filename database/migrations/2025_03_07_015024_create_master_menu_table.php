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
        Schema::create('master_menu', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('url', 100);
            $table->string('icon', 100);
            $table->enum('status', ['active', 'inactive']);
           $table->string('code', 100)->unique();
            $table->integer('sequence');
            $table->string('description', 100)->nullable();
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->string('deleted_by', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_menu');
    }
};
