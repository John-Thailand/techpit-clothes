<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // 商品一覧画面を表示する処理
    public function index()
    {
        // viewメソッド：表示したいBladeテンプレートを指定
        // 第一引数：表示したいBladeテンプレートのパスを「.(ドット)」区切りで指定
        // withメソッド：Bladeテンプレートに値を渡す
        return view('product.index')->with('products', Product::get());
    }
}
