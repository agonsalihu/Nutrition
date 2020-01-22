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
    return view('welcome');
});

Auth::routes();

Route::resource('ingredients', 'IngredientController');
Route::resource('nutrition_amount', 'NutritionAmountController');
Route::resource('nutrition', 'NutritionController');
Route::resource('optimal_dose', 'OptimalDoseController');
Route::resource('recipe', 'RecipeController');
Route::resource('analysis', 'AnalysisController');
Route::resource('recipe_ingredients', 'RecipeIngredientsController');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('{path}', 'HomeController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );

