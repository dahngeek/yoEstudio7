<?php

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
    return view('landing', ['title'=> "YoEstudio7"]);
});
Route::get('news/{slug}', ['as' => 'article', function($slug) {
  return view('news.show', ['article' => Article::findBySlugOrFail($slug) ]);
}]);

Route::get('news', ['as' => 'news', function() {
  // return view('news.index', ['articles' => Article::listing()->paginate(12) ]);
  return response()->json(App\Article::get());
}]);