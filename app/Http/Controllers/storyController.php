<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rootstory;
use App\secondalter;
use App\firstalter;

class storyController extends Controller
{
    public function liste($page = 1)
    {
        //dump(session()->all());
        $rootStories = rootstory::orderByDesc("created_at")->skip(($page-1)*7)->take(7)->get();
        $rootnumber = ceil(count(rootstory::all())/7);
        return view('story/list', compact('rootStories'))->with('number', $rootnumber);;

    }
    public function rootdetail(rootstory $rootstory)
    {

        return view('story/rootdetail', compact('rootstory'));
    }
    public function alterdetail(firstalter $firstalter)
    {
        return view('story/alterdetail', compact('firstalter'));
    }
    public function allstory(secondalter $story)
    {

        return view('story/allstory', compact('story'));
    }

    public function addalter(Request $request,$id)
    {
        if ($request->seviye==0) {
            $story=rootstory::find($id);
        }
        elseif ($request->seviye==1) {
            $story=firstalter::find($id);
        }
        return view('story/alterekle', compact('story'),compact('request'));
    }
    public function savealter(Request $request)
    {
        if ($request->seviye==0) {
            $story= new firstalter();
            $story->metin = $request->metin;
            $story->kullanici_id = session('user.id');
            $story->parentid = $request->parentid;
            $story->save();
            return redirect()->route('alterdetay', $story);
        }
        elseif ($request->seviye==1) {
            $story= new secondalter();
            $story->metin = $request->metin;
            $story->kullanici_id = session('user.id');
            $story->parentid = $request->parentid;
            $story->save();
            return redirect()->route('allstory', $story);

        }
        

    }
    public function addRootStory(Request $request)
    {
        $story = new rootstory();
        $story->metin = $request->metin;
        $story->baslik = $request->baslik;
        $story->kullanici_id=session('user.id');
        $story->save();
        return redirect()->route('storydetay', $story);
    }
    public function delete(Request $request)
    {
        if ($request->seviye==0) {
            $story = rootstory::find($request->id);
            $story->delete();
            return redirect()->back();
        }
        elseif ($request->seviye==1) {
            $story = firstalter::find($request->id);
            $story->delete();
            return redirect()->back();
        }
        elseif ($request->seviye==2) {
            $story = secondalter::find($request->id);
            $story->delete();
            return redirect()->back();
        }
    }
}
