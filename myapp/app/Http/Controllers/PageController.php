<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

  public function home()
{
    $siteName = "My Laravel Learning Site";
    $currentYear = date('Y');
    
    return view('welcome', [
        'siteName' => $siteName,
        'currentYear' => $currentYear
    ]);
}

   public function about()
{
    $author = "Shanbel Kibre";
    $learningDays = 6;  // You're on Day 6!
    $goal = "Master Laravel from scratch";
    
    return view('about', compact('author', 'learningDays', 'goal'));
}

    public function contact()
    {
        return view('contact');
    }

    public function services(){
        return view('services');
    }
}
