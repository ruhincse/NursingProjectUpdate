<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_qualifications', function (Blueprint $table) {
            $table->id();
            $table->integer('nurse_id');
            $table->string('exam_name')->nullable();
            $table->string('group')->nullable();
            $table->string('year')->nullable();
            $table->string('grade')->nullable();
            $table->string('board')->nullable();
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
        Schema::dropIfExists('nurse_qualifications');
    }
}
