<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->charset ='utf8mb4';
            $table->collation ='utf8mb4_unicode_ci';
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('payment_type');
            $table->string('amount');
            $table->string('duration');
            $table->string('zoom_link');
            $table->string('passcode');
            $table->string('offical');
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
        Schema::dropIfExists('courses');
    }
}
