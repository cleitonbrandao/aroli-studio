<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')
                ->constrained(table: 'peoples', indexName: 'costumer_people_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('cpf');
            $table->string('email')->nullable();
            $table->timestamps();

            $table->unique(['person_id', 'cpf']);
        });
        DB::statement(
            'ALTER TABLE costumers ADD nItemPed INT(6) UNSIGNED ZEROFILL DEFAULT NULL' .
            ' COMMENT "Número do Pedido de Compra\r\nInformação de interesse do emissor para controle do B2B. (v2.0)"' .
            ' AFTER cpf'
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumers');
    }
};
