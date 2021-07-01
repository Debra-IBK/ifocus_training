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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id();
            $table->foreignId('user_id')->comment('The User who created the course');

            $table->string('name');
            $table->string('slug')->unique();

            $table->string('amount');
            $table->string('meeting_id');
            $table->integer('duration')->comment('This should be stored in weeks');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('payment_exp_date');
            $table->string('zoom_link');
            $table->string('passcode');

            $table->softDeletes();
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
