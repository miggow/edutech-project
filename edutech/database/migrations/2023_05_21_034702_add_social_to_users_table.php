<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('facebook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('facebook')->nullable();
            $table->dropColumn('twiter')->nullable();
            $table->dropColumn('instagram')->nullable();
            $table->dropColumn('github')->nullable();

        });
    }
}
