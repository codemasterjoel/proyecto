<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registro_luchadors', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary()->default(Uuid::uuid4()->toString());
            $table->boolean('estatus')->default(false);
            $table->Integer('cedula')->unique();
            $table->string('NombreCompleto');
            $table->date('fecha_nac');
            $table->string('telefono')->nullable();
            $table->string('correo');
            $table->foreignId('avanzada_id')->nullable()->references('id')->on('avanzadas')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('genero_id')->nullable()->references('id')->on('generos')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('nivel_academico_id')->nullable()->references('id')->on('nivel_academicos')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('responsabilidad_id')->nullable()->references('id')->on('responsabilidads')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('estado_id')->nullable()->references('id')->on('estados')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('municipio_id')->nullable()->references('id')->on('municipios')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('parroquia_id')->nullable()->references('id')->on('parroquias')->nullOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_luchadors');
    }
};
