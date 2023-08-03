<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\product;
use PDF;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function convertPDF(){
 $products = product::all();
 $pdf_view = PDF::loadView('convertPDF',compact('products'));
 return $pdf_view->download('product.pdf');

/*  install package
    composer require barryvdh/laravel-dompdf
    add providers and alias to config files:
    Barryvdh\DomPDF\ServiceProvider::Class,
    'PDF' => Barryvdh\DomPDF\Facade::Class,
    php artisan vendor:publish
    make convertPDF file to be loaded
    make route and controller

    for more guidance : https://www.youtube.com/watch?v=RHP1tNDY45E&ab_channel=GreatAdib

*/
}

}