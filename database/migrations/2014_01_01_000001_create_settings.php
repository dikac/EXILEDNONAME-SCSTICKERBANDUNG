<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettings extends Migration {
  public function up() {
    Schema::create('settings', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email');
      $table->string('phone');
      $table->string('address')->nullable();
      $table->text('description')->nullable();
      $table->string('socialmedia_facebook')->nullable();
      $table->string('socialmedia_intagram')->nullable();
      $table->string('socialmedia_twitter')->nullable();
      $table->string('socialmedia_youtube')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down() {
    Schema::dropIfExists('settings');
  }
}
