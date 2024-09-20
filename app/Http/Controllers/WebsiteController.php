<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function products()
    {
      return view('website.products');
    }

    public function about()
    {
      return view('website.about');
    }

    public function contact()
    {
      return view('website.contact');
    }


}
