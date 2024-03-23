<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpazilaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\SubCategoryController;

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

Route::get('/', [FontendController::class, 'index'])->name('home');
//Route::get('category', [FontendController::class, 'category'])->name('header');

Route::get('/dashboard', function () {
    if(auth()->user()->role == 'admin' || auth()->user()->role == 'superAdmin' || auth()->user()->role == 'editor'){
        return Inertia::render('Dashboard');
    }else{
        return Inertia::render('Dashboard');

    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/about', fn () => Inertia::render('About'))->name('about');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Category Create

   // Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    //Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    //Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    
    


    /// herere

    
// Category Route
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/category/update/{category}', [CategoryController::class, 'update']);
Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy']);

//subCategory Route

Route::get('/subCategory/index', [SubCategoryController::class, 'index'])->name('subCategories.index');
Route::get('/subCategory/create', [SubCategoryController::class, 'create']);
Route::post('/subCategory/store', [SubCategoryController::class, 'store']);
Route::get('/subCategory/edit/{subCategory}', [SubCategoryController::class, 'edit']);
Route::post('/subCategory/update/{subCategory}', [SubCategoryController::class, 'update']);
Route::get('/subCategory/destroy/{subCategory}', [SubCategoryController::class, 'destroy']);

// Featured Area
Route::get('/featured/index', [FeaturedController::class, 'index'])->name('featured.index');
Route::get('/create/featured', [FeaturedController::class, 'create']);
Route::post('/store/featured', [FeaturedController::class, 'store']);
Route::get('/edit/featured/{featured}', [FeaturedController::class, 'edit']);
Route::post('/update/featured/{featured}', [FeaturedController::class, 'update']);
Route::get('/destroy/featured/{featured}', [FeaturedController::class, 'destroy']);

//Division Route
Route::get('/division/index', [DivisionController::class, 'index'])->name('divisions.index');
Route::get('/division/create', [DivisionController::class, 'create']);
Route::post('/store/division', [DivisionController::class, 'store']);
Route::get('/edit/division/{division}', [DivisionController::class, 'edit']);
Route::post('/update/division/{division}', [DivisionController::class, 'update']);
Route::get('/destroy/division/{division}', [DivisionController::class, 'destroy']);

//District
Route::get('/district/index', [DistrictController::class, 'index'])->name('districts.index');
Route::get('/create/district', [DistrictController::class, 'create']);
Route::post('/store/district', [DistrictController::class, 'store']);
Route::get('/edit/district/{district}', [DistrictController::class, 'edit']);
Route::post('/update/district/{district}', [DistrictController::class, 'update']);
Route::get('/destroy/district/{district}', [DistrictController::class, 'destroy']);

//Upazila Route
Route::get('/upazila/index', [UpazilaController::class, 'index'])->name('upazilas.index');
Route::get('/create/upazila', [UpazilaController::class, 'create']);
Route::post('/store/upazila', [UpazilaController::class, 'store']);
Route::get('/edit/upazila/{upazila}', [UpazilaController::class, 'edit']);
Route::post('/update/upazila/{upazila}', [UpazilaController::class, 'update']);
Route::get('/destroy/upazila/{upazila}', [UpazilaController::class, 'destroy']);

//Topic Route

Route::get('/topic/index', [TopicController::class, 'index'])->name('topic.index');
Route::get('/create/topic', [TopicController::class, 'create']);
Route::post('/store/topic', [TopicController::class, 'store']);
Route::get('/edit/topic/{topic}', [TopicController::class, 'edit']);
Route::post('/update/topic/{topic}', [TopicController::class, 'update']);
Route::delete('/destroy/topic/{topic}', [TopicController::class, 'destroy']);





//News Route
Route::get('/admin/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/create/news', [NewsController::class, 'create']);
Route::post('/store/news', [NewsController::class, 'store']);
Route::get('/edit/news/{news}', [NewsController::class, 'edit']);
Route::post('/update/news/{news}', [NewsController::class, 'update']);
Route::delete('/destroy/news/{news}', [NewsController::class, 'destroy']);

// get news by categorye
Route::get('/admin/get-news-by-category', [FontendController::class, 'getNewsByCategory'])->name('newsByCategory');


// get news by title id
Route::get('/news/get-news-by-title/{news_id}', [FontendController::class, 'getNewsByTitle'])->name('newsByTitle');

});

require __DIR__.'/auth.php';
