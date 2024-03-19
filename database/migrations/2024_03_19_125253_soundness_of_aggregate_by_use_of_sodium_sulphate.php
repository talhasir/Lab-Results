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
        Schema::create('soundness_of_aggregate_by_use_of_sodium_sulphate', function (Blueprint $table) {
            $table->id();
    $table->json('data');
    $table->timestamps();
    $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soundness_of_aggregate_by_use_of_sodium_sulphate');
    }
};
