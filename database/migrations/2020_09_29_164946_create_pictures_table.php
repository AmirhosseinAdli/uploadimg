<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('picture_main');
            $table->string('picture_deactive')->nullable()->default(NULL);
            $table->enum('state',['deactive','active'])->default('deactive');
            $table->string('slug',20)->unique();
            $table->timestamp('expire_time')->nullable()->default(NULL)->comment('Null means unlimited');
            $table->integer('max_count')->nullable()->default(NULL)->comment('Null means unlimited');
            $table->string('token',100)->nullable()->default(NULL);
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
        Schema::dropIfExists('pictures');
    }
}
