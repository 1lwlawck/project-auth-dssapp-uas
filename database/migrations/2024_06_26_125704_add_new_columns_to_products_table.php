<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('jumlah_penjualan')->after('description');
            $table->decimal('rating', 3, 2)->after('jumlah_penjualan');
            $table->integer('jumlah_permintaan')->after('rating');
            $table->decimal('nilai_rekomendasi', 5, 2)->after('jumlah_permintaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('jumlah_penjualan');
            $table->dropColumn('rating');
            $table->dropColumn('jumlah_permintaan');
            $table->dropColumn('nilai_rekomendasi');
        });
    }
}