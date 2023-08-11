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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('aon');
            $table->string('intitule');
            $table->date('date_acquisition');
            $table->float('mt_acquisition');
            $table->float('mt_maintenance');
            $table->BigInteger('duree_proj');
            $table->text('consistance');
            $table->BigInteger('duree_garantie');
            $table->date('date_prov');
            $table->date('date_def');
            $table->boolean('garantie');
            $table->BigInteger('frequence_visite');
            $table->text('pv_prov');
            $table->text('pv_def');
            $table->string('type');
            $table->BigInteger('duree_maintenance');
            $table->string('type_maintenance');
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
        Schema::dropIfExists('projets');
    }
};
