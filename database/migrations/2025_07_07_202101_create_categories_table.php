<?php

use App\Models\User;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('color')->default('#ffffff');
            $table->foreignIdFor(User::class)->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('categories', function(Blueprint $table){
            $table->dropForeignIdFor(User::class);
        });
        Schema::dropIfExists('categories');
    }
};
