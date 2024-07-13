<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('test');
});
Route::view('/about', 'about')->name('page.about');
Route::get('/product', function () {
    return "Product PAGE";
});
Route::get('/product/{id}', function ( int $id) {
    return "ID Product: $id";
});
Route::get('/product/{id}/comment/{comment_id?}', function ( int $id, int $comment_id = null) {
    return "Product ID: $id, Comment ID: $comment_id";
});
Route::get('users/{id}', function($id){
    return "User ID: $id";
})->where('id', '[0-9]+');

//Nhóm với tiền tố 
Route::prefix('admin')->group(function () {
    Route::get('/category', function () {
        return "Admin Category";
    });
    Route::get('/product', function () {
        return "Admin Products";
    });
});


//Posst
// Route::get('/posts', function () {
//     $posts = DB::table('posts')->get();
//     dd($posts);
// });

//Lấy ra cột title và view 
// Route::get('/posts', function () {
//     $posts = DB::table('posts')
//     ->select('title', 'view')
//     ->get();
//     dd($posts);
// });

//Lấy ra tất cả bài viết có lượt xem > 500 
// Route::get('/posts', function () {
//     $posts = DB::table('posts')
//     ->where('view', '>', 500)
//     ->get();
//     dd($posts);
// });
Route::get('/posts', function () {
    $posts = DB::table('posts')
    ->join('categories', 'cate_id', 'categories.id')
    ->get();
    dd($posts);
});
// Join categories và posts 

//Hiển thị sản phầm với giao diện 
Route::get('/posts-list', function () {
    $posts = DB::table('posts')->get();
    return view('products', compact('posts'));
});

Route::get('/category/list', [CategoryController::class, 'index'])->name('category.index');