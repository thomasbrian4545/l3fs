<?php

use App\Livewire\AllUsers;
use App\Livewire\Counter;
use App\Livewire\DropDown;
use App\Livewire\FileUploadDownload;
use App\Livewire\RegisterUser;
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
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/register', RegisterUser::class);
Route::get('/dropdown', DropDown::class);
Route::get('/file-upload-download', FileUploadDownload::class);
Route::get('/all-users', AllUsers::class);
