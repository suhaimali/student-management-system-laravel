<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Enquiry
Route::get('/enquiry', [HomeController::class, 'Enquiry'])->name('enquiry');
Route::get('/enquiry-create', [HomeController::class, 'CreateEnquiry'])->name('enquiry.create');
Route::post('/enquiry-store', [HomeController::class, 'StoreEnquiry'])->name('store.enquiry');

// Country
Route::get('/country', [HomeController::class, 'Country'])->name('country');
Route::get('/create-country', [HomeController::class, 'CreateCountry'])->name('country.create');
Route::post('/country-store', [HomeController::class, 'StoreCountry'])->name('store.country');

// State
Route::get('/state', [HomeController::class, 'State'])->name('state');
Route::get('/create-state', [HomeController::class, 'CreateState'])->name('state.create');
Route::post('/state-store', [HomeController::class, 'StoreState'])->name('store.state');

// City
Route::get('/city', [HomeController::class, 'City'])->name('city');
Route::get('/create-city', [HomeController::class, 'CreateCity'])->name('city.create');
Route::post('/city-store', [HomeController::class, 'StoreCity'])->name('store.city');

// Branch
Route::get('/branch', [HomeController::class, 'Branch'])->name('branch');

// Student
Route::get('/student', [HomeController::class, 'Student'])->name('student');
Route::get('/student-create', [HomeController::class, 'CreateStudent'])->name('student.create');
Route::post('/student-store', [HomeController::class, 'StoreStudent'])->name('store.student');
// Branch
Route::get('/branch', [HomeController::class, 'Branch'])->name('branch');
Route::get('/branch-create', [HomeController::class, 'CreateBranch'])->name('branch.create');
Route::post('/branch-store', [HomeController::class, 'StoreBranch'])
    ->name('branch.store');

// Employee
Route::get('/employee', [HomeController::class, 'Employee'])->name('employee');
Route::get('/employee-create', [HomeController::class, 'CreateEmployee'])->name('employee.create');
Route::post('/employee-store', [HomeController::class, 'StoreEmployee'])->name('store.employee');