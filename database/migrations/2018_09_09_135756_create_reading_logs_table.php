<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadingLogsTable extends Migration
{
    public function up()
    {
        Schema::create('reading_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('read_date')->nullable()->index();
            $table->string('book_title')->nullable();
            $table->string('book_subtitle')->nullable();
            $table->timestamps();
        });
    }
}
