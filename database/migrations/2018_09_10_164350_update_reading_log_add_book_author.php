<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateReadingLogAddBookAuthor extends Migration
{
    public function up()
    {
        Schema::table('reading_logs', function (Blueprint $table) {
            $table->string('book_author')->nullable()->after('book_subtitle');
        });
    }
}
