<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 45);
            $table->string('nombre', 125);
            $table->string('razon_social', 175);
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('transportes');
    }
};
