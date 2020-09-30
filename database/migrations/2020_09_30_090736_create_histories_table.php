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
            $table->ipAddress('visitor_ip')->nullable()->default(NULL);
            #TODO: Change this to enum, after config complement
//            $table->enum('operation', array_keys(config('enums.histories.operations')))->comment('Operation Title');
            $table->string('operation', 20)->comment('Operation Title');
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
