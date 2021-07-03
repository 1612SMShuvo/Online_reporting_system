<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('company_phone');
            $table->string('company_owner')->nullable();
            $table->string('company_md')->nullable();
            $table->string('company_address');
            $table->string('company_licence')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_facebook')->nullable();
            $table->string('company_instagram')->nullable();
            $table->string('company_whatsapp')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_icon')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('companyinfos');
    }
}
