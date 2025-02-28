<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Identifiant de la session (clé primaire)
            $table->string('user_id')->nullable(); // L'utilisateur associé (facultatif)
            $table->text('payload'); // Les données sérialisées de la session
            $table->integer('last_activity'); // Dernière activité de la session
            $table->string('ip_address', 45)->nullable(); // L'adresse IP associée à la session (IPv6 compatible)
            $table->string('user_agent')->nullable(); // L'agent utilisateur (navigateur, etc.)
            $table->timestamps(); // Les champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
