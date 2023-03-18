<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filter_portfolio', function (Blueprint $table) {
            $table->foreignId('filter_id')->constrained('filters','id')->cascadeOnDelete();
            $table->foreignId('portfolio_id')->constrained('portfolios','id')->cascadeOnDelete();
            $table->primary(['filter_id','portfolio_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filter_portfolio');
    }
};
