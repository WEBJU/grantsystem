<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->unsignedBigInteger('user_id');
              $table->string('organization_name');
              $table->string('category');
              $table->string('amount');
              $table->string('population_benefitting');
              $table->int('status')->default(0);
              $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('beneficiaries');
    }
}
