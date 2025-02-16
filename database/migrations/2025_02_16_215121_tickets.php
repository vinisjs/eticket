<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('requester');
            $table->enum('status', ['open', 'in_progress', 'resolved'])->default('open');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
