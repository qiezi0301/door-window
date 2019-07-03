<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalisms', function (Blueprint $table) {
            $table->bigIncrements('id');
            //标题
            $table->string('title');
            //描述
            $table->string('describe')->nullable();
            //缩略图
            $table->string('thumb')->nullable();
            //详情
            $table->text('content')->nullable();
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
        Schema::dropIfExists('journalisms');
    }
}
