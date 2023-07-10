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
        // ['golongan' => 'I', "nama" => 'Juru', 'pangkat' => 'juru muda', 'ruang' => 'A'],
        Schema::create('pangkat', function (Blueprint $table) {
            $table->id();
            $table->string('golongan', 30);
            $table->string('pangkat', 50);
            $table->string('ruang', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pangkat');
    }
};
