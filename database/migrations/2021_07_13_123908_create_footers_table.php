<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('mail');
            $table->string('p_titre1');
            $table->string('p1');
            $table->string('p_titre2');
            $table->string('p2');
            $table->string('p_titre3');
            $table->string('p3');
            $table->string('p_titre4');
            $table->string('p4');
            $table->string('link2',40);
            $table->string('link3',40);
            $table->string('fax',40);
            $table->string('name',40);
            $table->string('street',40);
            $table->string('bp',40);
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
        Schema::dropIfExists('footers');
    }
}
