<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  public function up() {
  Schema::create('users', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('id_access')->unsigned();
    $table->string('profile_avatar')->nullable();
    $table->string('name');
    $table->string('username')->unique();
    $table->string('phone')->unique();
    $table->string('email')->unique();
    $table->string('address_1')->nullable();
    $table->string('address_2')->nullable();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->integer('active')->default(1);
    $table->integer('sort')->default(1);
    $table->integer('status')->default(1);
    $table->foreign('id_access')->references('id')->on('accesses')->onDelete('restrict')->onUpdate('restrict');
    $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
