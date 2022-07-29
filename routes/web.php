<?php

use App\Http\Controllers\CalculatorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * GET
 * - O que é digitado no navegador
 * - Utilizado para recuperar dados / exibir páginas
 */
Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator.index');

/**
 * POST
 * - Utilizado para enviar dados (ex: Formulários)
 * - Os dados enviados não ficam visíveis ao usuário
 */
Route::post('/sum', [CalculatorController::class, 'sum'])->name('calculator.sum');

// Parei em 36 minutos e 48 segundos