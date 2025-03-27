<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('title');
                $table->text('content');
            });
        }

        Post::create([
            'title' => 'My first post',
            'content' => 'This is the content of my first post',
        ]);

        Post::create([
            'title' => 'My second post',
            'content' => 'This is the content of my second post',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
