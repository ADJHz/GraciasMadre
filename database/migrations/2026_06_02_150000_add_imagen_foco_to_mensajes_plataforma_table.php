<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('mensajes_plataforma', function (Blueprint $table) {
            $table->unsignedTinyInteger('imagen_foco_x')
                ->default(50)
                ->after('imagen_marco');
            $table->unsignedTinyInteger('imagen_foco_y')
                ->default(50)
                ->after('imagen_foco_x');
        });
    }

    public function down(): void
    {
        Schema::table('mensajes_plataforma', function (Blueprint $table) {
            $table->dropColumn(['imagen_foco_x', 'imagen_foco_y']);
        });
    }
};
