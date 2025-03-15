<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    Public function homePage(){
        return view('home');
    }
    Public function aboutPage(){
        return view('about');
    }
    Public function servicesPage(){
        return view('services');
    }

    Public function portfolioPage(){
        return view('portfolio');
    }

    Public function contactPage(){
        return view('contact');
    }
}
