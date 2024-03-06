<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// GETリクエストに対してのルートを定義し、主に通常のURL遷移やフォームのGETリクエストに対して用いる
// ProductControllerのindexアクションを指定
// /というルートに対して、product.indexという名前を付けています
Route::get('/', [ProductController::class, 'index'])->name('product.index');
