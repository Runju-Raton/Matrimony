<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('created_by');
            $table->string('created_for', 50);
            $table->string('name', 100);
            $table->string('gender', 50);
            $table->integer('age');
            $table->string('material_status', 50);
            $table->string('religion', 50);
            $table->string('nationality', 50);
            $table->string('city', 50);
            $table->string('address', 100);
            $table->string('mobile', 50);
            $table->text('pic')->nullable();
            $table->string('occupation', 50);
            $table->string('qualification', 50);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('members');
    }
}
