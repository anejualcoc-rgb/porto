<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/proyek', [PortfolioController::class, 'proyek'])->name('proyek');
Route::post('/kirim-pesan', [ContactController::class, 'send'])->name('contact.send');

Route::get('/download-cv', function () {
    $path = storage_path('app/public/CV.pdf');
    return Response::download($path, 'Iqmal-Nuriadi-CV.pdf', [
        'Content-Type' => 'application/pdf',
    ]);
})->name('download.cv');

Route::get('/download-paper', function () {
    $path = storage_path('app/public/Paper.pdf');
    return Response::download($path, 'Iqmal-Nuriadi-Paper.pdf', [
        'Content-Type' => 'application/pdf',
    ]);
})->name('download.Paper');


Route::get('/download/{filename}', function ($filename) {
    $path = storage_path('app/public/' . $filename);

    if (!file_exists($path)) {
        abort(404, 'File tidak ditemukan.');
    }

    return response()->download($path, $filename, [
        'Content-Type' => 'application/pdf',
    ]);
})->name('download.file');