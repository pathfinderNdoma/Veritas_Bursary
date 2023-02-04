<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PayslipController;


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

Route::get('/payroll', [Controller::class, 'payroll']);
route::get('/staffReg', [Controller::class, 'staffReg']);
route::post('/staffReg', [Controller::class, 'reg']);
route::get('/bursaryLogin', [Controller::class, 'login']);
route::post('/login', [Controller::class, 'loginMain']);
route::get('/salarySchedule', [Controller::class, 'salarySchedule']);
route::get('/dashboard', [Controller::class, 'dashboard']);
route::get('/payslip', [Controller::class, 'payslip']);
Route::GET('paySlip', [PayslipController::class, 'pay'])->name("paySlip");
route::post('/download_payslip', [Controller::class, 'downloadpdf']);
route::get('paymentLog', [Controller::class, 'paymentLog']);
route::get('paymentReport', [Controller::class, 'paymentReport']);

Route::get('/log', [App\Http\Controllers\paymentlogController::class, 'feespayment'])->name('log');
