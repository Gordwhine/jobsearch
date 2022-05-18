<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UsersController;

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
    return view('welcome', [
        'jobs' => \App\Models\Job::latest()->filter(request(['tag', 'search']))->paginate(3),
        'totalUsers' => \App\Models\User::count(),
        'totals' => DB::table('jobs')
                    ->selectRaw('count(title) as totalJobPosted')
                    ->selectRaw('count(company_name) as totalCompany')
                    ->first()
    ]);
});

Route::get('/listings', [JobsController::class, 'index'])->name('listings');
Route::get('/listings/{job}', [JobsController::class, 'show'])->name('show');
Route::get('/listings/{job}/edit', [JobsController::class, 'edit'])->middleware('auth')->name('edit');
Route::get('/create', [JobsController::class, 'create'])->middleware('auth')->name('create');
Route::post('/store', [JobsController::class, 'store'])->middleware('auth')->name('save');
Route::put('/listings/{job}', [JobsController::class, 'update'])->middleware('auth')->name('update');
Route::delete('/listings/{job}', [JobsController::class, 'destroy'])->middleware('auth')->name('delete');
Route::get('/manage', [JobsController::class, 'manage'])->middleware('auth')->name('manage');

Route::get('/register', [UsersController::class, 'register'])->middleware('guest')->name('register');
Route::get('/login', [UsersController::class, 'login'])->middleware('guest')->name('login');
Route::post('/users', [UsersController::class, 'store'])->name('store');
Route::post('/authenticate', [UsersController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [UsersController::class, 'logout'])->middleware('auth')->name('logout');
