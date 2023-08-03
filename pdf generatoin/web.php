<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/pdfGeneration', [Controller::Class, 'convertPDF'])->name('pdfGeneration');   