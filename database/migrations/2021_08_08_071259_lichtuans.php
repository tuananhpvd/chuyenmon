<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lichtuans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table
        Schema::create('lichtuans', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('author_id');
        $table->foreign('author_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        $table->string('tuan')->unique();
        $table->string('tungay', 10);
        $table->string('denngay', 10);
        $table->text('ndhai');
        $table->text('thhai');
        $table->text('ndba');
        $table->text('thba');
        $table->text('ndtu');
        $table->text('thtu');
        $table->text('ndnam');
        $table->text('thnam');
        $table->text('ndsau');
        $table->text('thsau');
        $table->text('ndbay');
        $table->text('thbay');
        $table->text('ndcn');
        $table->text('thucn');
        $table->string('slug')->unique();
        $table->boolean('active');
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
        // drop table
        Schema::drop('lichtuans');
    }
}
