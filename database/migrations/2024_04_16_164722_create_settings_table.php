<?php

use App\Models\Setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('api_url_sentrix')->nullable();
            $table->string('api_url_active')->nullable();
            $table->string('sid')->nullable();
            $table->string('token')->nullable();
            $table->string('twilio_number')->nullable();
            $table->string('send_number')->nullable();
            $table->string('send_number2')->nullable();
            $table->timestamps();
        });
        Setting::create([
            'api_url_sentrix' => 'https://www.mobilesentrix.ca',
            'api_url_active' => 'https://londontech-ca.myshopify.com/api/2024-01/graphql.json',]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
