<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('document', 18)->unique();
            $table->integer('marital');
            $table->date('birth');
            $table->string('rg', 12)->unique();
            $table->string('address', 80);
            $table->string('neighborhood', 80);
            $table->string('city', 60);
            $table->float('remuneration', 8, 2);
            $table->string('office', 30);
            $table->integer('rule');
            $table->date('start');
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
        Schema::dropIfExists('employes');
    }
}
