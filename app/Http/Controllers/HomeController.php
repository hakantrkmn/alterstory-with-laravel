<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function login()
    {
        return view('website/login');
    }
    public function createrootstory()
    {
        
        return view('website/createrootstory');
    }
    public function signin()
    {
        
        return view('website/signin');
    }
    public function welcome()
    {
        
        return view('website/welcome');
    }
}
