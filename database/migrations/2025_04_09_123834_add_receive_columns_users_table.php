<?php

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
        if (!Schema::hasColumns('users', ['receive_emails', 'receive_updates', 'receive_offers'])) {
            Schema::table('users', function (Blueprint $table) {
                $table->boolean('receive_emails')->default(false)->after('bio');
                $table->boolean('receive_updates')->default(false)->after('receive_emails');
                $table->boolean('receive_offers')->default(false)->after('receive_emails');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumns('users', ['receive_emails', 'receive_updates', 'receive_offers'])) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn(['receive_emails', 'receive_updates', 'receive_offers']);
            });
        }
    }
};
