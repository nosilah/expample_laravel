<?php

// use App\Http\Controllers\ComController;

use App\Http\Controllers\Blog\Admin\CategoryController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\RestTestController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/blog', PostController::class)->names('blogPost');

Route::resource('/rest', RestTestController::class)->names('restTest');


//admin blog

$groupData = [
    'namespase' => 'Blog\Admin',
    'prefix'    => 'admin/blog',
];

Route::group($groupData, function(){
    //blogCategory
    $methods = ['index', 'edit', 'store', 'update', 'create', 'show'];
    Route::resource('categories', CategoryController::class )
    ->only($methods)
    ->names('blog.admin.categories');
});
