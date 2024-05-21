<?php

use App\Http\Controllers\Administrator\AboutController;
use App\Http\Controllers\Administrator\AnyQuestionController;
use App\Http\Controllers\Administrator\BlogController;
use App\Http\Controllers\Administrator\CommentController;
use App\Http\Controllers\Administrator\ContactController;
use App\Http\Controllers\administrator\CounterController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\FaqController;
use App\Http\Controllers\Administrator\FooterQuickController;
use App\Http\Controllers\Administrator\FooterServiceController;
use App\Http\Controllers\Administrator\HeaderController;
use App\Http\Controllers\Administrator\HeroController;
use App\Http\Controllers\Administrator\IntroController;
use App\Http\Controllers\Administrator\ProjectController;
use App\Http\Controllers\Administrator\ServiceController;
use App\Http\Controllers\Administrator\teamController;
use App\Http\Controllers\Administrator\TestimonialController;
use App\Http\Controllers\Administrator\topHeaderController;
use App\Http\Controllers\FooterAboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\userController;
use App\Http\Controllers\Front\HomeController;

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

// Front
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('blog/detail/{id}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::post('contact', [HomeController::class, 'contact'])->name('contact.ajax');
Route::post('comment', [HomeController::class, 'comment'])->name('comment.ajax');

// Profile
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Admin panel
Route::get('dashboard', function (){
    return view('admin.index');
})->name('dashboard')->middleware('auth');

Route::middleware(['auth', 'admin'])->prefix('dashboard')->group(function () {
    Route::resource('users', userController::class);
    Route::resource('topHeader', topHeaderController::class)->parameters(['topHeader'=>'id']);
    Route::resource('hero', HeroController::class)->parameters(['hero' => 'id']);
    Route::resource('about', AboutController::class)->parameters(['about'=>'id']);
    Route::resource('intro', IntroController::class)->parameters(['intro' => 'id']);
    Route::resource('service', ServiceController::class)->parameters(['service' => 'id']);
    Route::resource('counter', CounterController::class)->parameters(['counter' => 'id']);
    Route::resource('team', teamController::class)->parameters(['team' => 'id']);
    Route::resource('project', ProjectController::class)->parameters(['project' => 'id']);
    Route::resource('testimonial', TestimonialController::class)->parameters(['testimonial' => 'id']);
    Route::resource('faq', FaqController::class)->parameters(['faq' => 'id']);
    Route::resource('footer/about', FooterAboutController::class)->names([
        'index' => 'footer.about.index',
        'create' => 'footer.about.create',
        'store' => 'footer.about.store',
        'edit' => 'footer.about.edit',
        'update' => 'footer.about.update',
        'destroy' => 'footer.about.destroy',
        'show' => 'footer.about.show'
    ])->parameters(['about' => 'id']);
    Route::resource('footer/service', FooterServiceController::class)->names([
        'index' => 'footer.service.index',
        'create' => 'footer.service.create',
        'store' => 'footer.service.store',
        'edit' => 'footer.service.edit',
        'update' => 'footer.service.update',
        'destroy' => 'footer.service.destroy',
        'show' => 'footer.service.show'
    ])->parameters(['service' => 'id']);
    Route::resource('footer/quick', FooterQuickController::class)->names([
        'index' => 'footer.quick.index',
        'create' => 'footer.quick.create',
        'store' => 'footer.quick.store',
        'edit' => 'footer.quick.edit',
        'update' => 'footer.quick.update',
        'destroy' => 'footer.quick.destroy',
        'show' => 'footer.quick.show'
    ])->parameters(['quick' => 'id']);
    Route::resource('footer/anyQuestion', AnyQuestionController::class)->names([
        'index' => 'footer.anyQuestion.index',
        'create' => 'footer.anyQuestion.create',
        'store' => 'footer.anyQuestion.store',
        'edit' => 'footer.anyQuestion.edit',
        'update' => 'footer.anyQuestion.update',
        'destroy' => 'footer.anyQuestion.destroy',
        'show' => 'footer.anyQuestion.show'
    ])->parameters(['anyQuestion' => 'id']);
    Route::resource('header', HeaderController::class)->parameters(['header' => 'id']);
});

Route::middleware(['auth', 'author'])->prefix('dashboard')->group(function (){
    Route::resource('comment', CommentController::class)->parameters(['comment' => 'id']);
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
    Route::resource('blog', BlogController::class)->parameters(['blog' => 'id']);
});


require __DIR__.'/auth.php';
