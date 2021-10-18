<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemembranceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remembrance_data', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->unsigned();
            $table->integer("remembrance_id")->unsigned();
            $table->boolean("like")->default(false);
            $table->boolean("save")->default(false);

            $table->boolean("ilike")->default(false);
            $table->boolean("isave")->default(false);

            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("remembrance_id")->references("id")->on("remembrances")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remembrance_data');
    }
}
