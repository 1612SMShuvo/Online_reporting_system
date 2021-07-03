<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agreement_no');
            $table->string('agreement_date');
            $table->string('company_id');
            $table->string('company_name');
            $table->string('proposal_no');
            $table->string('invoice_no');
            $table->string('created_by');
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
        Schema::dropIfExists('agreements');
    }
}
