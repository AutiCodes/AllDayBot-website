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
        Schema::create("website_activity_logs", function (Blueprint $table) {

            $table->increments("id");
            $table->string("subject");
            $table->string("url");
            $table->string("method");
            $table->string("IP")->nullable();
            $table->string("agent")->nullable();
            $table->string("username")->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop("website_activity_logs");
    }
};
