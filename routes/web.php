<?php

use App\Http\Controllers\BookController;
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

Route::get('/home', 'HomeController@index')->name('home');

// Route pour l'affichage de la liste de livres
Route::get('/books', 'BookListController@index')->name('bookList');

// Route pour l'affichage des détails d'un livre
Route::name('showBookDetails')->get('books/{book}', 'BookController');

// Route pour l'affichage de la liste des utilisateurs
// Route::get('/users', 'UsersListController@index')->name('usersList');

// Route pour accéder au formulaire de modification d'un utilisateur
// Route::name('editUser')->get('users/{user}', 'EditUserController');
Route::resource('users', 'UsersListController');


