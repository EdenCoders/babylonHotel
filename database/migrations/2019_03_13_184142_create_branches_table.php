<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->engine = 'InnoDB' ;
            $table->bigIncrements('id');
            $table->string('code');
            $table->text('description')->nullable();
            $table->string('cover_front')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('branches');
    }
}
