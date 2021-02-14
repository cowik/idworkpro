<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatejobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('placebirth');
            $table->string('idnumber');
            $table->string('phonenumber');
            $table->string('name');
            $table->string('placebirth');
            $table->string('religion');
            $table->string('email');
            $table->date('datebirth');
            $table->string('placebirth');
            $table->string('idphoto');
            $table->text('currentaddress');
            $table->string('latestdegree');
            $table->string('contracttype');
            $table->text('jobexperience');
            $table->string('latestdegreecert');
            $table->date('availabledate');
            $table->text('jobinterest');
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
        //
    }
}
