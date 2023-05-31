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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid("order_id");
            $table->decimal("subtotal");
            $table->decimal("price");
            $table->decimal("tax");
            $table->integer("quantity");
            $table->foreignId("phone_id")->constrained("phones");
            $table->foreignId("user_id")->constrained("users");
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
