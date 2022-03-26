<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupocidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupocidades', function (Blueprint $table) {
            $table->id();
            $table->string('grupo');
            $table->unsignedBigInteger('campanha_ativa');
            $table->timestamps();

            $table->foreign('campanha_ativa')->references('id')->on('campanhas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupocidades');
    }
}
