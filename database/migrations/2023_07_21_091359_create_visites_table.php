<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_intervenants')->constrained('intervenants')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_debut_prev');
            $table->date('date_reelle');
            $table->date('date_cloture');
            $table->text('commentaire');
            $table->string('statut');
            $table->string('action');
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
        Schema::dropIfExists('visites');
    }
};
