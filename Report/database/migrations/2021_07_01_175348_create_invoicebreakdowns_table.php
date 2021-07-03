<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicebreakdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicebreakdowns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice');
            $table->string('proposal_no');
            $table->string('service_no');
            $table->string('service_name');
            $table->string('sale_tax');
            $table->string('others');
            $table->string('entry_date');
            $table->string('s_price');
            $table->string('quantity');
            $table->string('price');
            $table->string('total_price');
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
        Schema::dropIfExists('invoicebreakdowns');
    }
}
