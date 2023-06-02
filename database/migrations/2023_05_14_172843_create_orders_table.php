<?php

use App\Models\Ticket;
use App\Models\Concert;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->foreignIdFor(Ticket::class)
                ->constrained();
            $table->foreignIdFor(Concert::class)
                ->constrained();
            $table->string('hash');
            $table->timestamps();
        });
    }
};
