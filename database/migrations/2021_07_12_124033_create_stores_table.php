<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Cart', 'Order'])
                ->default('Cart')
                ->index('type')
                ->comment('Тип пользовательского выбора (Корзина/Заказ)');
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');
            $table->string('username')->nullable()->comment('ФИО пользователя');
            $table->string('email')->nullable()->comment('Email пользователя');
            $table->string('phone')->nullable()->comment('Телефон пользователя');
            $table->text('comment')->nullable()->comment('Комментарий к заказу');
            $table->integer('price')->default(0)->comment('Общая стоимость корзины/заказа');
            $table->enum('status', ['new', 'processed', 'canceled'])
                ->default('new')
                ->comment('Статус заказа');
            $table->uuid('session_id')->unique()->comment('ИД корзины для сессии');

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
        Schema::dropIfExists('stores');
    }
}
