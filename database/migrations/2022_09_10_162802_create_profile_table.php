<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id('id_profile');
            $table->string('photo');
            $table->string('full_name');
            $table->string('nick_name');
            $table->string('position');
            $table->text('address');//char:50
            $table->char('phone',12);
            $table->string('email')->unique();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('linkid')->nullable();
            $table->text('job_description');//char:180
            $table->text('self_description');//char:250
            $table->integer('user_id');
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
        Schema::dropIfExists('biodata');
    }
};
// MY NOTE HERE :
// #biodata :
// full_name, nick_name, position, address[char:50], phone, email, fb, ig, tweeter, linkid, job_description[char:180], self_description[char:250]
// #skills :
// name
// #experiences :
// company_name, position, start_year,end_year
// #education	:
// school_name, level, start_year,end_year
// #services	:
// icon, service_name, description[char:100]
// #portfolio
// images
// #testimonials
// image, name, position, text[char:100]
// #messages :
// name, email, subcject, text
// ========================
// willbe delete : pricing n blog

