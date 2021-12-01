<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferenceSpeakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_speaker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conference_id')->index()->constrained('conferences')->cascadeOnDelete();
            $table->foreignId('speaker_id')->index()->constrained('speakers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_speaker');
    }
}
