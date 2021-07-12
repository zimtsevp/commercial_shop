<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')
                ->constrained()
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId('product_id')
                ->constrained()
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');
            $table->string('product_name')->nullable()->comment('Наименование продукта');
            $table->integer('price')->default(0)->comment('Цена товара в момент покупки');
            $table->integer('count')->default(0)->comment('Кол-во товара');

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
        Schema::dropIfExists('items');
    }
}
