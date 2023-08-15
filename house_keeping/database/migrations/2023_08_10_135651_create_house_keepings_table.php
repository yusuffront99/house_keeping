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
            $table->string('shift');
            $table->string('op_turbine1');
            $table->string('op_turbine2');
            $table->string('op_boiler1');
            $table->string('op_boiler2');
            $table->string('team_leader');
            $table->string('manbagop');
            $table->text('ttd_opt1')->default('img_default/white.jpeg');
            $table->text('ttd_opt2')->default('img_default/white.jpeg');
            $table->text('ttd_opb1')->default('img_default/white.jpeg');
            $table->text('ttd_opb2')->default('img_default/white.jpeg');
            $table->text('ttd_tl')->default('img_default/white.jpeg');
            $table->text('ttd_manbag')->default('img_default/white.jpeg');
            $table->text('graphic')->default('img_default/white.jpeg');
            $table->string('bln_laporan');
            $table->date('tgl_pengesahan');
            $table->longText('summary');
            $table->longText('conclusion');
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
