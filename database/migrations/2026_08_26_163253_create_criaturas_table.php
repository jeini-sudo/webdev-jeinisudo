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
        Schema::create('criatura', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->default("Mounstruo");

            $table->integer("comida")->default(100);
            $table->integer("limpieza")->default(100);
            $table->integer("agua")->default(100);    
            

            $table->boolean("vivo")->default(true);
            $table->integer("etapa")->default(1);
            $table->string("forma")->default("huevo");
            $table->integer("fallos_etapa")->default(0);

            $table->timestamp("interaccion")->useCurrent();
            $table->timestamps();
            
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criaturas');
    }
};
