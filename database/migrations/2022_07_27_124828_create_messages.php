<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessages extends Migration {
  public function up() {
    Schema::create('messages', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_sender')->unsigned();
      $table->timestamp('date_start')->nullable();
      $table->timestamp('date_end')->nullable();
      $table->integer('id_receiver')->default(0);
      $table->text('content')->nullable();
      $table->integer('important')->default(0);
      $table->integer('mark')->default(0);
      $table->integer('read')->default(0);
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_sender')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down() {
    Schema::dropIfExists('messages');
  }
}
