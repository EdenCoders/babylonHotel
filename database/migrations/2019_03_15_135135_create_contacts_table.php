<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->engine = 'InnoDB' ; 
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('value');
            

            $table->unsignedInteger('branch_id');
            $table->timestamps();

          /*  $table->foreign('branch_id')
                    ->references('id')
                    ->on('branches')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');*/

            $table->charset = 'utf8';
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
        Schema::dropIfExists('contacts');
    }
}
