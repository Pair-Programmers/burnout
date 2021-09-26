<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('full_name');
            $table->date('dob');
            $table->date('starting_date');
            $table->string('designation');
            $table->string('gender');
            $table->string('education');
            $table->string('experience');
            $table->string('status');
            $table->string('password');
            $table->string('email');
            $table->bigInteger('employer_id')->unsigned();
            $table->foreign('employer_id')->references('id')->on('employers');
            $table->string('isSurveyDoneThisMonth');

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
        Schema::dropIfExists('employees');
    }
}
