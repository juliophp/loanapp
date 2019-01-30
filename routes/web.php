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
})->name('index')->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('students/loans', 'StudentLoanController@index')->name('students.loans');
Route::get('students/loans/{id}', 'StudentLoanController@show')->name('student.loans.show');

Route::prefix('bank')->group(function() {
  Route::get('/', 'BankController@index')->name('bank.index');
  Route::get('/bvn/{id}/', 'BankController@loadbvn')->name('bvn.load');
  Route::post('/bvn/{id}/{bvn}', 'BankController@verifybvn')->name('bvn.verify');
  Route::get('loans/granted','BankLoanController@granted')->name('bank.loans.granted');
  Route::get('loans/export','BankLoanController@export')->name('bank.loans.export');
  Route::resource('loans', 'BankLoanController', ['as' => 'bank', 'only' => ['index', 'show', 'update']  ]);
  Route::resource('balance', 'BankBalanceController', ['as' => 'bank', 'only' => ['index']  ]);
  Route::get('balance/export', 'BankBalanceController@export')->name('bank.balance.export');
  Route::post('logout', 'Auth\BankLoginController@logout')->name('bank.logout');
  Route::get('login', 'Auth\BankLoginController@showLoginForm')->name('bank.login');
  Route::post('login', 'Auth\BankLoginController@login')->name('bank.login.submit');
});
Route::prefix('university')->group(function() {
  Route::get('/', 'UniversityController@index')->name('uni.index');
  Route::get('university/{university}','UniversityController@show')->name('uni.show');
  Route::get('students/reviewed','UniversityStudentController@review')->name('uni.students.reviewed');
  Route::resource('students', 'UniversityStudentController', ['as' => 'uni', 'only' => ['index', 'show', 'update']]);
  Route::post('logout', 'Auth\UniLoginController@logout')->name('uni.logout');
  Route::get('login', 'Auth\UniLoginController@showLoginForm')->name('uni.login');
  Route::post('login', 'Auth\UniLoginController@login')->name('uni.login.submit');
});
Route::prefix('donor')->group(function() {
  Route::get('/', 'DonorController@index')->name('donor.index');
  Route::get('/students/upload', 'DonorStudentController@getupload')->name('donor.students.upload');
  Route::post('/students/upload', 'DonorStudentController@upload')->name('donor.students.submit');
  Route::get('donor/{donor}','DonorController@show')->name('donor.show');
  Route::get('students/accepted','DonorStudentController@accepted')->name('donor.students.accepted');
  Route::resource('students', 'DonorStudentController', ['as' => 'donor', 'only' => ['index', 'show']]);
  Route::post('logout', 'Auth\DonorLoginController@logout')->name('donor.logout');
  Route::get('login', 'Auth\DonorLoginController@showLoginForm')->name('donor.login');
  Route::post('login', 'Auth\DonorLoginController@login')->name('donor.login.submit');
});
Route::prefix('admin')->group(function() {
  Route::get('/', 'AdminController@index')->name('admin.index');
  Route::resource('students','AdminStudentController', ['as' => 'admin', 'only' => ['index', 'show', 'destroy']]);
  Route::resource('universities','AdminUniversityController', ['as' => 'admin']);
  Route::resource('banks','AdminBankController', ['as' => 'admin']);
  Route::resource('donors','AdminDonorController', ['as' => 'admin']);
  Route::resource('wallet','BalanceController', ['as' => 'admin', 'only' => ['create', 'index', 'store']]);
  Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});

Route::post('pay/{id}', 'PaymentController')->name('make.payment');
Route::resource('loans', 'LoanController', ['only' => ['index', 'create','store']]);
Route::resource('banks', 'BankController',  [ 'as' => 'bank', 'only' => ['show', 'edit','update']]);
Route::resource('students', 'StudentController');
