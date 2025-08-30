<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up (): void {
        Schema::create('reviews' , function ( Blueprint $table ) {
            $table->id();
            $table->morphs('reviewable');
            $table->string('name');
            $table->string('email')->nullable();
            $table->unsignedTinyInteger('stars')->default(0);
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    public function down (): void {
        Schema::dropIfExists('reviews');
    }
};
