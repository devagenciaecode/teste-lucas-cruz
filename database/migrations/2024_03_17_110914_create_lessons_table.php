<?php

declare(strict_types=1);

use App\Models\Module;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('video_url');
            $table->integer('order');
            $table->softDeletes();
            $table->timestamps();

            $table->foreignIdFor(Module::class)->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
