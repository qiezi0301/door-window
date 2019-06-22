<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            //分类id
            $table->unsignedBigInteger('tid');
            //产品名称
            $table->string('name');
            //缩略图
            $table->string('thumb')->nullable();;
            //详情
            $table->text('content')->nullable();
            //多图
            $table->text('images')->nullable();
            //查看统计
            $table->integer('views_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
