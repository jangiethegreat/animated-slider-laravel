<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CarouselItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $carouselItems = CarouselItem::all();
        return view('index', ['carouselItems' => $carouselItems]);
    }
}
