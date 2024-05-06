<?php

use App\Http\Controllers\Auth\ForgetPassword;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPassword;
use App\Http\Controllers\HomeConroller;
use App\Imports\ClubPlansImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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


Route::get('/', [HomeConroller::class, 'index'])->name('dashboard');
Route::get('/clubs', App\Http\Livewire\Clubs\Index::class)->name('clubs.index');
Route::get('club/{slug}', App\Http\Livewire\Clubs\Profile::class)->name('club.profile');
Route::get('club', function ()
{
    return redirect(route('clubs.index'));

});
Route::get('/privacy-policy', \App\Http\Livewire\Privacy::class)->name('Privacy');
Route::get('/results', \App\Http\Livewire\Results::class)->name('results');

Route::middleware('auth')->group(function (){

    Route::get('/reports', App\Http\Livewire\Reports\Index::class)->name('reports.index')->can('viewReport', App\Models\User::class);
        Route::get('/clubs-reports', App\Http\Livewire\ClubsReports\Index::class)->name('reports.clubs')->can('viewTool', App\Models\User::class);

    Route::get('/posts', App\Http\Livewire\Posts\Index::class)->name('posts.index')->can('viewPost', App\Models\User::class);

    Route::get('/attends', App\Http\Livewire\Attendees\Index::class)->name('attends.index');
    Route::get('/attends/{url}', App\Http\Livewire\Attendees\Url::class)->name('attends.add');

    Route::get('/activities', \App\Http\Livewire\Activities\Index::class)->name('reservations.index');

    Route::get('/orders', App\Http\Livewire\Contacts\Index::class)->name('orders.index');

    Route::get('/students', \App\Http\Livewire\Users\Index::class)->name('users.index')->can('view', App\Models\User::class);

    Route::get('/certificates', App\Http\Livewire\Certificates\Index::class)->name('certificates.index')->can('viewCertificate', App\Models\User::class);

    Route::get('/awards', App\Http\Livewire\Awards\Index::class)->name('awards.index')->can('viewAward', App\Models\User::class);

    Route::get('/tools', App\Http\Livewire\Tools\Index::class)->name('tools.index')->can('viewTool', App\Models\User::class);

    Route::get('/{username}', App\Http\Livewire\Profiles\Index::class)->name('profile.index')->middleware('userequalauthuser');



});


Route::prefix('auth')->group(function()
{
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'checkLogin'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'registration'])->name('register');

    Route::get('/forget-password', [ForgetPassword::class, 'index'])->name('forgetPasswordView');
    Route::post('/forget-password', [ForgetPassword::class, 'store'])->name('forgetPassword');

    Route::get('/reset-password', [ResetPassword::class, 'index'])->name('resetPasswordView');
    Route::post('/reset-password', [ResetPassword::class, 'store'])->name('resetPassword');
});
