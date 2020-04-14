<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfigForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE TABLE `config_forms` (
            `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `lang` CHAR(10) NULL DEFAULT 'vi',
            `type` CHAR(10) NOT NULL,
            `taxonomy` CHAR(20) NOT NULL,
            `data` TEXT NOT NULL,
            `sort` TINYINT(10) UNSIGNED NULL,
            `status` TINYINT(2) UNSIGNED NULL,
            `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
            `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`));

            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
