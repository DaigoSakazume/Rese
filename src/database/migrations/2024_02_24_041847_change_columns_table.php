<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            DB::statement("ALTER TABLE reservations MODIFY COLUMN date date NOT NULL AFTER user_id");
            DB::statement("ALTER TABLE reservations MODIFY COLUMN time time NOT NULL AFTER date");
            DB::statement("ALTER TABLE reservations MODIFY COLUMN number integer NOT NULL AFTER time");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            //
        });
    }
}
