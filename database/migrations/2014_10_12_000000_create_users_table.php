<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('staff_no')->unique()->nullable();
            $table->string('membership_no')->uniqiue()->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('department_id')->default(0);
            $table->string('mobile')->unique()->nullable();
            $table->text('address')->nullable();
            $table->enum('sex', ['undefined', 'male', 'female'])->default('undefined');
            $table->string('signature')->nullable();
            $table->enum('type', ['undefined', 'staff', 'medical', 'instructor'])->default('undefined');
            $table->string('hr_staff_name')->nullable();
            $table->date('approved_date')->nullable();
            $table->string('hr_signature')->nullable();
            $table->boolean('agreed_terms')->default(false);
            $table->boolean('verified')->default(false);
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
