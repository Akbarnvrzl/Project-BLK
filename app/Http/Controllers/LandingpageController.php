<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pest\Support\View;

class LandingpageController extends Controller
{
    public function landingpage()
    {
        return view('front-end.landingpage', [
            'title' => config('app.name')
        ]);
    }
     public function about()
    {
        return view('front-end.about', [
            'title' => config('app.name')
        ]);}
        
     public function service()

        {return view('front-end.service', [
            'title' => config('app.name')
        ]);}
        
     public function article()

        {return view('front-end.article', [
            'title' => config('app.name')
        ]);}
        
}
