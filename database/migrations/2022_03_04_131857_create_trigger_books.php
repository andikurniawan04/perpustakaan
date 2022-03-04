<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER kurang_buku 
        AFTER INSERT ON `meminjams`
        FOR EACH ROW
        BEGIN
            UPDATE bukus SET jumlah = jumlah - 1
            WHERE id_buku = NEW.id_buku;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `kurang_buku`');
    }
}
