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
        Schema::create('house_keepings', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pelaksanaan');
            $table->string('nama_peralatan');
            $table->string('posisi_peralatan');
            $table->string('bagian_operator');
            $table->text('foto_1');
            $table->text('foto_2');
            $table->text('foto_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_keepings');
    }
};
