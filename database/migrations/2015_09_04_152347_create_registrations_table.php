<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reg_id');
            $table->string('name',100);
            $table->string('gender',7);
            $table->string('degree',5);
            $table->string('course',10);
            $table->string('year',30);
            $table->string('dept',30);
            $table->string('college_address',150);
            $table->string('email',30);
            $table->bigInteger('mobile_no');
            $table->bigInteger('guardian_mobile_no');
            $table->integer('amount');
            $table->string('dd_no',25);
            $table->string('dd_date',20);
            $table->string('bank_name',40);
            $table->string('reason',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('registrations');
    }
}
