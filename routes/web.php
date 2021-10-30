<?php

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

Route::get('tentang', function () {
    return "<h1>Hello</h1>"
        . "Selamat datang di webapp saya<br>"
        . "Laravel emang keren";
});
//Route Parameter
Route::get('posting/{id}', function ($a) {
    return "Halaman Posting ke - <b?>$a</b>";
});

Route::get('psting/{id}', function ($a) {

});
Route::get('biodata/{nama}/{alamat}/{jk}/{tb}/{bb}', function ($nama, $alamat, $jk, $tb, $bb) {
    return view('profile', compact('nama', 'alamat', 'jk', 'tb', 'bb'));
});

//mengakses data melalui model
Route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

Route::get('testmodel/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    return $query;
});

Route::get('testmodel/{search}', function ($s) {
    $query = App\Models\Post::where('title', 'like', "%$s%")->get();
    return $query;
});
//mengubah judul dari data ke 2 berdasarkan 'id'
Route::get('testmodel/update', function () {
    $query = App\Models\Post::find(2);
    $query->title = "Bane Si Bajak Laut";
    $query->save();
    return $query;
});

Route::get('testmodel-add', function () {
    $query = new App\Models\Post();
    $query->title = "sholawat penghapus maksiat";
    $query->content = "lorem ipsum sit amet dolor";
    $query->save();
    return $query;
});
