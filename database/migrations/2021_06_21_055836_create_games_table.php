<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("sku")->unique();
            $table->string("name", 60);
            $table->text("description");
            $table->integer("players_number");
            $table->boolean("presale");
            $table->unsignedBigInteger("game_genre_id");
            $table->foreign("game_genre_id")->references("id")->on("game_genres");
            $table->unsignedFloat("price");
            $table->date("release_date");
            $table->unsignedBigInteger("company_id");
            $table->foreign("company_id")->references("id")->on("companies");
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
        Schema::dropIfExists('games');
    }
}
