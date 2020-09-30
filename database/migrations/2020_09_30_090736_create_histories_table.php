<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('picture_id');
            $table->foreign('picture_id')->references('id')->on('pictures')->cascadeOnDelete();
            $table->ipAddress('visited_ip')->nullable()->default(NULL);
            #TODO: Change this to enum, after brainstorming
            $table->string('title',20)->comment('Operation Title');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
