<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\modalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdersController;
use App\Models\Service;


Route::get('/', function () {
    return view('main');
});

Route::get('/about', [Aboutcontroller::class, 'about'])->name('about');
Route::get('/contact', [Contactcontroller::class, 'contact'])->name('contact');

Route::post('/modals', [modalController::class, 'store'])->name('orders');
 
Route::get('/modals', function () {
    return view('modals'); 
})->name('modals');

Route::get('/orders', [OrdersController::class, 'index'])->name('admin.orders.index');
Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store');



Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.admin-login');
Route::post('admin/login', [LoginController::class, 'login']);
Route::post('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
// Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
// Route::patch('/booking/{id}', [BookingController::class, 'update'])->name('booking.update');

Route::get('/admin/services', [AdminServiceController::class, 'index'])->name('admin.services.index');
Route::post('/admin/services', [AdminServiceController::class, 'store'])->name('service.store');    
Route::get('/admin/services/{service}/edit', [AdminServiceController::class, 'edit'])->name('admin.services.edit');
Route::put('/admin/services/{service}', [AdminServiceController::class, 'update'])->name('services.update');
Route::delete('/admin/services/{service}', [AdminServiceController::class, 'destroy'])->name('services.destroy');
