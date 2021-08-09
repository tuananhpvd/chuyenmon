<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaytotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daytot', function (Blueprint $table) {
            $table->string('magv', 25);
            $table->foreign('magv')->references('magv')->on('giaovien');
            $table->string('tengv', 50);
            $table->string('ngayday', 10);
            $table->string('thu', 10);
            $table->string('buoi', 10);
            $table->string('tiet', 1);
            $table->string('lop', 5);
            $table->string('phong', 15);
            $table->string('mon', 15);
            $table->text('tenbai');
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
        Schema::dropIfExists('daytot');
    }
}
