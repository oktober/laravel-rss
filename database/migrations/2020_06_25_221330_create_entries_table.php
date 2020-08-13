<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            //for this foreign key, decide if want to do cascade on update or delete
            $table->foreignId('feed_id')->constrained('feeds');
            $table->dateTimeTz('date_published', 0);
            $table->dateTimeTz('date_updated', 0);
            $table->string('entry_url', 500);
            $table->string('entry_title', 250);
            $table->string('entry_teaser', 1500);
            $table->mediumText('entry_content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
