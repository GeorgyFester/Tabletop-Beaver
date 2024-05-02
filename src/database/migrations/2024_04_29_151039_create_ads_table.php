<?php

use App\Models\User;
use DefStudio\Telegraph\Models\TelegraphBot;
use DefStudio\Telegraph\Models\TelegraphChat;
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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('language');
            $table->string('condition');
            $table->string('price');
            $table->string('payment_method');
            $table->string('receiving_method');
            $table->string('image')->nullable();
            $table->string('seller_contact');
            $table->boolean('is_active')->default(true);

            $table->foreignIdFor(TelegraphChat::class)->constrained();

            $table->foreignIdFor(TelegraphBot::class)->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
