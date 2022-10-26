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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('fish')->nullable();
            $table->string('uom')->nullable();
            $table->integer('kg')->nullable();
            $table->double('size1d')->nullable();
            $table->double('size1015')->nullable();
            $table->double('size12')->nullable();
            $table->double('size23')->nullable();
            $table->double('size34')->nullable();
            $table->double('size35')->nullable();
            $table->double('size45')->nullable();
            $table->double('size46')->nullable();
            $table->double('size56')->nullable();
            $table->double('size58')->nullable();
            $table->double('size68')->nullable();
            $table->double('size810')->nullable();
            $table->double('size1012')->nullable();
            $table->double('size1215')->nullable();
            $table->double('size15up')->nullable();
            $table->double('tcarton')->nullable();
            $table->double('tkg')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('forms');
    }
};
