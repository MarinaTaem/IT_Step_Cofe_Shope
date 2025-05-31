<?php 

//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthController; 
//use App\Http\Controllers\CoffeeController;
//use App\Http\Controllers\AccountController; 
//use App\Http\Controllers\RoleController;

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.user');
//Route::post('/login', [AccountController::class, 'login']);
//Route::resource('roles', RoleController::class);
//
//Route::get('coffee', [CoffeeController::class, 'index'])->name('coffee');
//
//Route::get('/', function () {
//    return view('index');
//});
//
//Route::get('/home', function () {
//    return view('index');
//})->name('home');
//
//Route::get('/generic', function () {
//    return view('generic');
//})->name('generic');
//
//Route::get('/elements', function () {
//    return view('elements');
//})->name('elements');
//
//Route::get('/about_us', function () {
//    return view('about_us');
//})->name('about_us');
//
//Route::get('login', function () {
//    return view('login');
//})->name('login');
//
//Route::get('/admin/dashboard', function () {
//    return view('admin.show_coffee');
//})->name('admin.dashboard');
//
//Route::get('/admin/dashboard/edit', function () {
//    return view('admin.edit_coffee');
//})->name('dashboard.edit');
//
//// admin routes
//
//Route::get('/admin/dashboard', [CoffeeController::class, 'dashboard'])->name('dashboard');
//Route::get('/admin/dashboard/edit/{id}', [CoffeeController::class, 'edit'])->name('dashboard.edit');
//Route::delete('/admin/dashboard/delete/{coffee}', [CoffeeController::class, 'destroy'])->name('dashboard.destroy');
//Route::put('/admin/dashboard/update/{coffee}', [CoffeeController::class, 'update'])->name('dashboard.update');
//
//
//// Login/Register Pages
//Route::view('/login', 'login')->name('login');
//
//// Auth API
//Route::post('/login', [AccountController::class, 'login'])->name('login.user');
//Route::post('/register', [AccountController::class, 'register'])->name('register.user');
//Route::post('/logout', [AccountController::class, 'logout'])->name('logout.user');
//
//// Protected Page
//Route::get('/dashboard', function () {
//    return view('index');
//})->middleware('auth')->name('dashboard');
//
//
//Route::get('/admin-dashboard', function () {
//    return view('admin.show_coffee');
//})->middleware('auth')->name('admin.dashboard');

//

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AccountController;
// use App\Http\Controllers\RoleController;
// use App\Http\Controllers\CoffeeController;

// // Public Pages
// Route::get('/', fn () => view('index'));
// Route::get('/home', fn () => view('index'))->name('home');
// Route::get('/generic', fn () => view('generic'))->name('generic');
// Route::get('/elements', fn () => view('elements'))->name('elements');
// Route::get('/about_us', fn () => view('about_us'))->name('about_us');

// // Coffee Display Page
// Route::get('coffee', [CoffeeController::class, 'index'])->name('coffee');

// // Login/Register Pages
// Route::view('/login', 'login')->name('login');

// // Authentication Routes
// Route::post('/login', [AccountController::class, 'login'])->name('login.user');
// Route::post('/register', [AccountController::class, 'register'])->name('register.user');
// Route::post('/logout', [AccountController::class, 'logout'])->name('logout.user');

// // Admin Dashboard Routes (Protected)
// Route::middleware('auth')->prefix('admin')->group(function () {
//     Route::get('/dashboard', [CoffeeController::class, 'dashboard'])->name('dashboard');
//     Route::get('/dashboard/edit/{id}', [CoffeeController::class, 'edit'])->name('dashboard.edit');
//     Route::put('/dashboard/update/{coffee}', [CoffeeController::class, 'update'])->name('dashboard.update');
//     Route::delete('/dashboard/delete/{coffee}', [CoffeeController::class, 'destroy'])->name('dashboard.destroy');
// });

// // Admin Dashboard Routes (Protected)
// Route::middleware('auth')->prefix('admin')->group(function () {
//     Route::get('/dashboard', [CoffeeController::class, 'dashboard'])->name('dashboard');
//     Route::get('/dashboard/edit/{id}', [CoffeeController::class, 'edit'])->name('dashboard.edit');
//     Route::put('/dashboard/update/{coffee}', [CoffeeController::class, 'update'])->name('dashboard.update');
//     Route::delete('/dashboard/delete/{coffee}', [CoffeeController::class, 'destroy'])->name('dashboard.destroy');
// });

// Route::middleware('web')->group(function () {
//     Route::post('/login', [AccountController::class, 'login'])->name('login.user');
// });


// // Role Management (Optional)
// Route::resource('roles', RoleController::class);

// // Default Authenticated Redirect Page
// Route::get('/dashboard', fn () => view('index'))->middleware('auth')->name('dashboard');


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CoffeeController;

// Public Pages
Route::get('/', fn () => view('index'));
Route::get('/home', fn () => view('index'))->name('home');
Route::get('/generic', fn () => view('generic'))->name('generic');
Route::get('/elements', fn () => view('elements'))->name('elements');
Route::get('/about_us', fn () => view('about_us'))->name('about_us');

// Coffee Display Page
Route::get('coffee', [CoffeeController::class, 'index'])->name('coffee');

// Login/Register Pages
Route::view('/login', 'login')->name('login');

// Authentication Routes
Route::post('/login', [AccountController::class, 'login'])->name('login.user');
Route::post('/register', [AccountController::class, 'register'])->name('register.user');
Route::post('/logout', [AccountController::class, 'logout'])->name('logout.user');

// Admin Dashboard Routes (Protected)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [CoffeeController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/dashboard/edit/{id}', [CoffeeController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/update/{coffee}', [CoffeeController::class, 'update'])->name('dashboard.update');
    Route::delete('/dashboard/delete/{coffee}', [CoffeeController::class, 'destroy'])->name('dashboard.destroy');
});

// Role Management (Optional)
Route::resource('roles', RoleController::class);

// Authenticated Redirect Handler
Route::get('/redirect-after-login', [AccountController::class, 'redirectAfterLogin'])->name('redirect.after.login');
