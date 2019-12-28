<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_treatments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id');
            $table->integer('user_id');
            $table->integer('treatment_id');
            $table->string('title');
            $table->string('description');
            $table->string('current_area');
            $table->string('new_area');
            $table->string('current_street');
            $table->string('new_street');
            $table->string('current_position');
            $table->string('new_position');
            $table->string('current_block');
            $table->string('new_block');
            $table->string('current_parcel');
            $table->string('new_parcel');
            $table->string('building_number');
            $table->string('current_owner');
            $table->string('new_owner');
            //account bank
            $table->string('bank_id');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->string('branch_id');
            $table->string('account_bank');
            //account customer
            $table->string('account_id');
            //
            $table->string('maintenance_type');

            //
            $table->string('company_name');
            $table->string('company_field');
            $table->string('company_project_name');
            $table->string('craft_type');
            $table->string('craft_no');


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
        Schema::dropIfExists('customer_treatments');
    }
}
