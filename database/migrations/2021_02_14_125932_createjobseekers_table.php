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
            $table->id();
            $table->string('name')->nullable();
            $table->string('placebirth')->nullable();
            $table->string('idnumber')->nullable();
            $table->string('profilephoto')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('religion')->nullable();
            $table->string('email')->nullable();
            $table->date('datebirth')->nullable();
            $table->string('idphoto')->nullable();
            $table->text('currentaddress')->nullable();
            $table->string('latestdegree')->nullable();
            $table->string('contracttype')->nullable();
            $table->text('jobexperience')->nullable();
            $table->string('latestdegreecert')->nullable();
            $table->date('availabledate')->nullable();
            $table->text('jobinterest')->nullable();
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
        Schema::dropIfExists('jobseekers');
    }
}
