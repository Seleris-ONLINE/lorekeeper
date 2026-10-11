<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPronounsToCharacterProfilesTable extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::table('character_profiles', function (Blueprint $table) {
            $table->string('pronouns')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::table('character_profiles', function (Blueprint $table) {
            $table->dropColumn('pronouns');
        });
    }
}
