<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMediaContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media_contacts', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('url');
            $table->unsignedInteger('branch_id');
            $table->timestamps();

          /*  $table->foreign('branch_id')
                ->references('id')
                ->on('branches')
                ->onUpdate('cascade')
                ->onDelete('cascade');*/


            $table->charset = 'utf8' ; 
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_media_contacts');
    }
}
