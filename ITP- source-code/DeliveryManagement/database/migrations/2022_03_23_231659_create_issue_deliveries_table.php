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
        Schema::create('issue_deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('totalQty');
            $table->string('totalAmount');
            $table->string('issueDate');
            $table->string('deliveredDate');
            $table->string('status')->default('Pending');
            $table->string('idOrder');
            $table->string('idCustomer');
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
        Schema::dropIfExists('issue_deliveries');
    }
};
