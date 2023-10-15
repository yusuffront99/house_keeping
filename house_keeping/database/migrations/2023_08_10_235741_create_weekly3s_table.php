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
        Schema::create('weekly3s', function (Blueprint $table) {
            $table->id();
            $table->string('agenda')->default('Minggu 3');
            $table->date('tgl_turbine')->nullable();
            $table->date('tgl_boiler')->nullable();
            $table->string('peralatan_turbine');
            $table->string('peralatan_boiler');
            $table->string('posisi_turbine');
            $table->string('posisi_boiler');
            $table->text('foto_1')->default('-');
            $table->text('foto_2')->default('-');
            $table->text('foto_3')->default('-');
            $table->text('foto_4')->default('-');
            $table->text('foto_5')->default('-');
            $table->text('foto_6')->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly3s');
    }
};
