<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->boolean('enabled')->default(true)->comment('Включен/выключен продукт');
            $table->foreignId('category_id')
                ->constrained()
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');
            $table->string('articul')->nullable()->comment('Актикул продукта');
            $table->string('title')->default('')->comment('Наименование продукта');
            $table->text('description')->nullable()->comment('Описание продукта');
            $table->bigInteger('price')->default(0)->comment('Стоимость продукта');
            $table->integer('count')->default(0)->comment('Кол-во едениц в наличии');
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
        Schema::dropIfExists('products');
    }
}
