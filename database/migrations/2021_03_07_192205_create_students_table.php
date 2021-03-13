<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')-> nullable();
            $table->integer('roll_no')-> nullable();
            $table->integer('regi_no')-> nullable();
            $table->string('board')-> nullable();
            $table->string('inst')-> nullable();
            $table->string('result')-> default('passed');
            $table->bigInteger('bangla')-> nullable();
            $table->bigInteger('english')-> nullable();
            $table->bigInteger('math')-> nullable();
            $table->float('bgpa')-> nullable();
            $table->float('egpa')-> nullable();
            $table->float('mgpa')-> nullable();
            $table->integer('grade')-> default(5);
            $table->float('cgpa')-> nullable();
            $table->integer('year')-> nullable();
            $table->string('exam')-> nullable();
            $table->string('photo')-> nullable();
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
        Schema::dropIfExists('students');
    }
}
