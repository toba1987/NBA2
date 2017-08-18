<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('news_teams', function (Blueprint $table) {

            $table->unsignedInteger('news_id');
            $table->unsignedInteger('team_id');
            $table->primary(['news_id','team_id']);

            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_teams', function (Blueprint $table) {
            $table->dropForeign('news_tag_news_id_foreign');
            $table->dropForeign('team_tag_teams_id_foreign');
        });

        Schema::dropIfExists('news_teams');
    }
}
