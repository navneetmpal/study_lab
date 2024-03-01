<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoardsController;
use App\Http\Controllers\TaskController;

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


Route::post('/registger', [IndexController::class, 'registger'])->name('registger');
Route::get('/loginpage', [IndexController::class, 'loginpage'])->name('loginpage');
Route::post('/login', [IndexController::class, 'login'])->name('login');


Route::get('/index', [IndexController::class, 'index'])->name('index')->middleware('auth');
Route::get('/school/{id}', [IndexController::class, 'school'])->name('school')->middleware('auth');
Route::get('/admission/{id}', [IndexController::class, 'admission'])->name('admission')->middleware('auth');
Route::post('/store/{id}', [IndexController::class, 'store'])->name('store')->middleware('auth');
Route::get('/thanks', [IndexController::class, 'thanks'])->name('thanks')->middleware('auth');
Route::get('mail', [IndexController::class, 'mail'])->name('mail')->middleware('auth');
// Route::get('mail', function () {  
//     $details = [
//         'title' => 'Admission inquery',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('np392414@gmail.com')->send(new \App\Mail\AdmissionInquery($details));
   
//     dd("Email is Sent.");
// });

Route::get('place', [IndexController::class, 'place'])->name('place')->middleware('auth');
Route::get('/pickplace/{id}', [IndexController::class, 'pickplace'])->name('pickplace')->middleware('auth');
Route::post('/pick', [IndexController::class, 'pick'])->name('pick')->middleware('auth');
Route::get('/viewplace/{address}', [IndexController::class, 'viewplace'])->name('viewplace')->middleware('auth');
Route::get('/viewjobdetail/{id}', [IndexController::class, 'viewjobdetail'])->name('viewjobdetail')->middleware('auth');
Route::get('/viewall', [IndexController::class, 'viewall'])->name('viewall')->middleware('auth');
Route::post('/location', [IndexController::class, 'location'])->name('location')->middleware('auth');
Route::get('/viewjoblocation/{address}', [IndexController::class, 'viewjoblocation'])->name('viewjoblocation')->middleware('auth');
Route::get('/writeblogs', [IndexController::class, 'writeblogs'])->name('writeblogs')->middleware('auth');
Route::post('/blogcontent', [IndexController::class, 'blogcontent'])->name('blogcontent')->middleware('auth');
Route::get('/viewblog/{id}', [IndexController::class, 'viewblog'])->name('viewblog')->middleware('auth');
Route::get('/editblog/{id}', [IndexController::class, 'editblog'])->name('editblog')->middleware('auth');
Route::get('/deleteblog/{id}', [IndexController::class, 'deleteblog'])->name('deleteblog')->middleware('auth');
Route::post('/updateblog/{id}', [IndexController::class, 'updateblog'])->name('updateblog')->middleware('auth');
Route::get('/viewallblog', [IndexController::class, 'viewallblog'])->name('viewallblog')->middleware('auth');
Route::get('/job_apply_form/{id}', [IndexController::class, 'job_apply_form'])->name('job_apply_form')->middleware('auth');//review
Route::post('/jobapply/{id}', [IndexController::class, 'jobapply'])->name('jobapply')->middleware('auth');
Route::post('/review/{id}', [IndexController::class, 'review'])->name('review')->middleware('auth');
Route::post('/searchforall', [IndexController::class, 'searchforall'])->name('searchforall')->middleware('auth');
Route::post('/logout', [IndexController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/student', [IndexController::class, 'student'])->name('student')->middleware('auth');
Route::get('/teacher', [IndexController::class, 'teacher'])->name('teacher')->middleware('auth');

// --------------------------------------------------------------------
// --------------------------------------------------------------------
// --------------------------------------------------------------------
// --------------------------------------------------------------------
// --------------------------------------------------------------------
// address route start
Route::resource('/address',AdminController::class);
Route::get('address-data', [AdminController::class, 'data'])->name('address.data');
Route::get('/addressdestroy/{id}', [AdminController::class, 'destroy'])->name('addressdestroy');
Route::post('/addressupdate/{id}', [AdminController::class, 'update'])->name('addressupdate');
// address route end

// Boards route start
Route::resource('/boards',BoardsController::class);
Route::get('boards-data', [BoardsController::class, 'data'])->name('boards.data');
Route::post('/boardsupdate/{id}', [BoardsController::class, 'update'])->name('boardsupdate');
// Route::get('/boardsdestroy/{id}', [BoardsController::class, 'destroy'])->name('boardsdestroy');



//task
Route::resource('/task',TaskController::class);
// Route::get('/get-images', 'TaskController@getImages');
Route::get('/get-images/{category}', [TaskController::class, 'getImages'])->name('getImages');

// Route::get('task-data', [TaskController::class, 'data'])->name('task.data');
// Route::get('/images/{id}', 'TaskController@getImages')->name('images.get');


Route::get('image/upload', [TaskController::class, 'fileCreate']);
// Route::get('image/upload', 'TaskController@classfileCreate');
Route::post('image/upload/store','TaskController@fileStore');
Route::post('image/delete','TaskController@fileDestroy');