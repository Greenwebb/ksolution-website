<?php

use App\Http\Controllers\LoanApplicationController;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\Faq;
use App\Http\Livewire\FinancialLiteracy;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\InvoiceDiscounting;
use App\Http\Livewire\OrderFinancing;
use App\Http\Livewire\Personal;
use App\Http\Livewire\RegulatoryServices;
use App\Http\Livewire\Services;
use App\Http\Livewire\SuccessPage;
use App\Http\Livewire\UnderMantenance;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;

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


Route::get('/about-us', AboutUsComponent::class)->name('about');
Route::post('/subscribe-to-news', [AboutUsComponent::class, 'subscribeToNewsletter'])->name('subscribe-news');
Route::get('/invoice-discounting', InvoiceDiscounting::class)->name('invoice-discounting');
Route::post('/apply-invoice-discounting', [InvoiceDiscounting::class, 'submit'])->name('apply-invoice-disc');
Route::get('/order-financing', OrderFinancing::class)->name('order-financing');
Route::post('/apply-order-financing', [OrderFinancing::class, 'submit'])->name('apply-order-fin');
Route::get('/personal', Personal::class)->name('personal');
Route::post('/apply-personal-loan', [Personal::class, 'submit'])->name('apply-personal');

Route::post('/apply-personal', [LoanApplicationController::class, 'store'])->name('apply');
Route::get('/financial-literacy', FinancialLiteracy::class)->name('financial-literacy');
Route::post('/apply-financial-literacy', [FinancialLiteracy::class, 'submit'])->name('apply-fin-lit');
Route::get('/regulatory-services', RegulatoryServices::class)->name('regulatory-services');
Route::post('/apply-regulatory-services', [RegulatoryServices::class, 'submit'])->name('apply-reg-serv');
Route::get('/faq', Faq::class)->name('faq');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::post('/send-message', [ContactUs::class, 'submit'])->name('send-message');
Route::get('/services', Services::class)->name('services');
Route::get('/login', UnderMantenance::class)->name('login');
Route::get('/successfully-applied', SuccessPage::class)->name('success-page');
Route::get('/', HomeComponent::class)->name('home');
