<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attestations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->enum('oldie', ['undefined', 'yes', 'no'])->default('undefined'); // have you gone to the gym before
            $table->string('time_span')->nullable(); // How long have you been to the gym
            $table->enum('program', ['undefined', 'yes', 'no'])->default('undefined'); // old program or diet
            $table->longText('observations')->nullable(); // if not successful tell us your observations
            $table->longText('training_goal')->nullable(); // Tell us goal for trianing

            $table->boolean('success_rate')->default(false);
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
        Schema::dropIfExists('attestations');
    }
}
