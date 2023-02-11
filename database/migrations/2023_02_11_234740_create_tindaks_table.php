<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laporan_id');
            $table->foreign('laporan_id')->references('id')->on('laporans')->onDelete('cascade');
            $table->unsignedBigInteger('konselor_id');
            $table->foreign('konselor_id')->references('id')->on('konselors')->onDelete('cascade');
            $table->integer('pertemuan');
            $table->text('tindakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindaks');
    }
}
