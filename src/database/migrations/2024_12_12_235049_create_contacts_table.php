<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->enum('gender', ['男性', '女性', 'その他']);
            $table->string('email', 255);
            $table->string('tel', 20);
            $table->string('address', 255);
            $table->string('building', 255)->nullable();
            $table->enum('detail', ['問い合わせ1', '問い合わせ2', '問い合わせ3', 'その他']);
            $table->text('content')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
