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
        Schema::create('amimals', function (Blueprint $table) {
            $table->id();
            $table->string("name",20)->comment("Pontos Név");
            $table->integer("amount")->nullable();
            $table->integer("typeid")->default(1);
            $table->enum("gender",["hím","nőstény","egyéb"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amimals');
    }
};
