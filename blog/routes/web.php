<?php


Route::get('/test', function(){
  return App\User::find(1)->profile;
});

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



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

  Route::get('/home', [
    'uses' => 'HomeController@index',
    'as'  => 'home'
  ]);
  
  // ----------------------
  //      POST ROUTES
  // ----------------------
  
  Route::get('/post/create', [
    'uses' => 'PostsController@create',
    'as'  => 'post.create'
  ]);
  
  Route::post('/post/store', [
    'uses' => 'PostsController@store',
    'as'  => 'post.store'
  ]);

  Route::get('/post/delete/{id}', [
    'uses' => 'PostsController@destroy',
    'as'  => 'post.delete'
  ]);

  Route::get('/posts', [
    'uses' => 'PostsController@index',
    'as'  => 'posts'
  ]);

  Route::get('/posts/trashed', [
    'uses' => 'PostsController@trashed',
    'as'  => 'post.trashed'
  ]); 

  Route::get('/posts/kill/{id}', [
    'uses' => 'PostsController@kill',
    'as'  => 'post.kill'
  ]); 

  Route::get('/posts/restore/{id}', [
    'uses' => 'PostsController@restore',
    'as'  => 'post.restore'
  ]);

  Route::get('/posts/edit/{id}', [
    'uses' => 'PostsController@edit',
    'as'  => 'post.edit'
  ]);

  Route::post('/posts/update/{id}', [
    'uses' => 'PostsController@update',
    'as'  => 'post.update'
  ]);

  // ----------------------
  //      CATEGORY ROUTES
  // ----------------------
  
  Route::get('/category/create', [
    'uses' => 'CategoriesController@create',
    'as'  => 'category.create'
  ]);

  Route::get('/categories', [
    'uses' => 'CategoriesController@index',
    'as'  => 'categories'
  ]);

  Route::post('/category/store', [
    'uses' => 'CategoriesController@store',
    'as'  => 'category.store'
  ]);

  Route::get('/category/edit/{id}', [
    'uses' => 'CategoriesController@edit',
    'as'  => 'category.edit'
  ]);

  Route::get('/category/delete/{id}', [
    'uses' => 'CategoriesController@destroy',
    'as'  => 'category.delete'
  ]);

  Route::post('/category/update/{id}', [
    'uses' => 'CategoriesController@update',
    'as'  => 'category.update'
  ]);

  // ----------------------
  //      Tag ROUTES
  // ----------------------

  // Index
   Route::get('/tags', [
    'uses' => 'TagsController@index',
    'as'  => 'tags'
  ]);

  // Edit
   Route::get('/tag/edit/{id}', [
    'uses' => 'TagsController@edit',
    'as'  => 'tag.edit'
  ]);

  // Update
   Route::post('/tag/update/{id}', [
    'uses' => 'TagsController@update',
    'as'  => 'tag.update'
  ]);

  // Delete
   Route::get('/tag/delete/{id}', [
    'uses' => 'TagsController@destroy',
    'as'  => 'tag.delete'
  ]);

  // Create
  Route::get('/tag/create', [
    'uses' => 'TagsController@create',
    'as'  => 'tag.create'
  ]);

  // Store
  Route::post('/tag/store', [
    'uses' => 'TagsController@store',
    'as'  => 'tag.store'
  ]);

  // ----------------------
  //      Users Controller
  // ----------------------

  Route::get('/users', [
    'uses' => 'UsersController@index',
    'as'  => 'users'
  ]);

  Route::get('/user/create', [
    'uses' => 'UsersController@create',
    'as'  => 'user.create'
  ]);

  Route::post('/user/store', [
    'uses' => 'UsersController@store',
    'as'  => 'user.store'
  ]);

  Route::get('/user/admin/{id}', [
    'uses' => 'UsersController@admin',
    'as'  => 'user.admin'
  ]);

  Route::get('/user/not-admin/{id}', [
    'uses' => 'UsersController@not_admin',
    'as'  => 'user.not.admin'
  ]);

  // ----------------------
  //     Test Todo
  // ----------------------

  Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as'  => 'todos'
  ]);

  Route::post('addTodos', 'TodosController@store');

});

