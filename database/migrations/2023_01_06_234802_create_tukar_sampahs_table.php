<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tukar_sampahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('berat_plastik')->NULL();
            $table->integer('berat_besi')->NULL();
            $table->integer('berat_kaleng')->NULL();
            $table->string('alamat_penjemputan')->nullable();
            $table->string('status')->default('Unverified');
            

            $table->integer('total')->default(0);

            $table->timestamps();
        });
            // DB::statement("UPDATE tukar_sampahs SET total = (berat_plastik * 500) + (berat_besi * 1000) 
            // + (berat_kaleng * 500)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tukar_sampahs');
    }
};
