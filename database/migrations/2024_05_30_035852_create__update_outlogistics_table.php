<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void
    {
        Schema::table('outlogistics', function (Blueprint $table) {
            $table->unsignedBigInteger('id_inlogistik')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('outlogistics', function (Blueprint $table) {
            $table->unsignedBigInteger('id_inlogistik')->nullable(false)->change();
        });
    }
};
