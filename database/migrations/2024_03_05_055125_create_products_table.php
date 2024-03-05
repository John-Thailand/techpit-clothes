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
        // マイグレーション実行時に呼び出され、テーブルの作成やカラムの追加を行う
        // Schemaクラスは、テーブル操作のメソッドを提供している
        // テーブルの作成はSchema::createメソッドを使用する
        // 第一引数：テーブル名、第二引数：カラムを定義する関数
        // Blueprint：新しいテーブルを定義するためのオブジェクト
        Schema::create('products', function (Blueprint $table) {
            // idカラムを追加するコード
            // BIGINTというデータ型にオートインクリメントの設定をつけている
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->integer('price');
            // created_atカラムとupdated_atカラムを追加するコード
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
        // downメソッドはマイグレーションの取り消し（ロールバック）するときに呼び出される
        // Schema::dropIfExistsメソッドは、引数に設定されたテーブルが存在していた場合、そのテーブルを削除
        Schema::dropIfExists('products');
    }
};
