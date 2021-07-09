<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
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
            $table->foreignId('user_id')
                  ->constrained()
                  ->onUpdate('CASCADE')
                  ->onDelete('SET NULL');
            $table->string('username')->nullable()->comment('ФИО пользователя');
            $table->string('email')->nullable()->comment('Email пользователя');
            $table->string('phone')->nullable()->comment('Телефон пользователя');
            $table->text('comment')->nullable()->comment('Комментарий к заказу');
            $table->integer('price')->default(0)->comment('Общая стоимость корзины/заказа');
            $table->enum('status', [0,1])->default(0)->('Статус заказа');

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
        Schema::dropIfExists('carts');
    }
}
