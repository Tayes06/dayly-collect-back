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
        Schema::create('client', function (Blueprint $table) {
            $table->string("id_client")->primary();
            $table->string("nom_client", 100);
            $table->string("prenom_client", 100)->nullable();
            $table->string("adresse_client", 100)->nullable();
            $table->string("telephone_client", 100);
            $table->string("sexe_client", 1);
            $table->integer("age")->default(20);
            $table->string("cni_client", 100)->nullable();
            $table->string("photo_client", 100)->nullable();
            $table->string("id_user");
            $table->foreign("id_user")->references("id_user")->on("users")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
