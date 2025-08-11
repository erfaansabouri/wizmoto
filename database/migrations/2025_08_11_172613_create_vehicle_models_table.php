<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up (): void {
        Schema::create('vehicle_models' , function ( Blueprint $table ) {
            $table->id();
            $table->string('name')->nullable(); // e.g. 'Liberty 125', 'XMAX 300'
            $table->unsignedBigInteger('brand_id')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down (): void {
        Schema::dropIfExists('models');
    }
};
