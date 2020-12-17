<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LogsConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('logs', function (Blueprint $table) {
            $table->dropForeign(['contact_id']);
        });

        DB::statement("ALTER TABLE contacts MODIFY COLUMN id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT");
        DB::statement("ALTER TABLE logs MODIFY COLUMN id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT");

        DB::statement("ALTER TABLE logs MODIFY COLUMN contact_id BIGINT(20) UNSIGNED NOT NULL");

        Schema::table('logs', function(Blueprint $table) {
            $table->foreign('contact_id')
                ->references('id')
                ->on('contacts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logs', function (Blueprint $table) {
            $table->dropForeign(['contact_id']);
        });
    }
}
