<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day'); //ngasih tau hari
            $table->date('date'); //ngasih tau tanggal
            $table->time('start_time'); //ngasih tau waktu dimulai
            $table->time('end_time'); //ngasih tau waktu selesai
            $table->string('duration_time'); //ngasih tau berakhir
            $table->string('course_name'); //ngasih tau nama matakuliah nya
            $table->integer('meeting_number');
            $table->string('lecturer');
            $table->string('room');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
