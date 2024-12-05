<?php

use App\Models\House;
use App\Models\Tag;
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
        Schema::create('house_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(House::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('house_tag', function (Blueprint $table) {
            $table->dropForeign(['tag_id']); // Supprime la clé étrangère
        });
    
        Schema::dropIfExists('house_tag');
        Schema::dropIfExists('tags');
    }
};
