<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect()->route('login');
});

// 認証が必要なルート
Route::middleware('auth')->group(function () {
    // カテゴリーのCRUDルート（仮ルートから置き換え）
    Route::resource('categories', CategoryController::class);

    // タスクの仮ルート（次のセクションで本実装に置き換え）
    Route::resource('tasks', TaskController::class);
});
