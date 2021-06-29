<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('phone_no');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('logged_in', ['1', '0'])->default('1');
            $table->enum('level', User::LEVEL)->default('unpaid');
            $table->enum('status', User::STATUS)->default('active');
            $table->enum('user_group', ['admin', 'student', 'facilitator'])->default('student');
            $table->uuid('uuid');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
