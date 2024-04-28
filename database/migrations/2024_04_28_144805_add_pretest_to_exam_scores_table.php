<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPretestToExamScoresTable extends Migration
{
    public function up()
    {
        Schema::table('exam_scores', function (Blueprint $table) {
            $table->integer('pretest')->default(0); // Menambahkan kolom pretest dengan nilai default 0
        });
    }

    public function down()
    {
        Schema::table('exam_scores', function (Blueprint $table) {
            $table->dropColumn('pretest'); // Menghapus kolom pretest jika rollback migrasi dilakukan
        });
    }
}
