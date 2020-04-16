<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductsTableAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('active');
            $table->string('status')->default('Non Active');
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('discount')->default(0);
            $table->float('point')->default(0);
            $table->string('calculate_unit');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->tinyInteger('active')->default(0);
            $table->dropColumn('status');
            $table->dropColumn('description');
            $table->dropColumn('short_description');
            $table->dropColumn('discount');
            $table->dropColumn('point');
            $table->dropColumn('calculate_unit');
            $table->dropSoftDeletes();
        });
    }
}
