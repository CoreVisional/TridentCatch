<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('stock_status', 11);
            $table->integer('stock_quantity')->nullable();

            $table->foreignId('product_id')->nullable();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('category_id')->nullable();
            $table->foreign('category_id')
                ->references('id')
                ->on('category')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

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
        Schema::dropIfExists('inventory');
    }
};
