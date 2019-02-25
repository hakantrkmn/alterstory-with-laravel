<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rootstory;
use App\secondalter;
use App\firstalter;

class storyController extends Controller
{
    public function liste()
    {
        $rootStories = rootstory::all()->sortByDesc("tarih");
        return view('list', compact('rootStories'));

    }
    public function detay(rootstory $rootstory)
    {
        return view('detay', compact('rootstory'));
    }
}
