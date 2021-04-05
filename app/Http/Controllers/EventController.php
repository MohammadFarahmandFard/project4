<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    public function news(){
        $news=Event::paginate(2);
        return view('news',compact('news'));
    }
    public function add_new(){
        return view('add_new');
    }
    public function enternews(){
        Event::create([
            'title'=>request('title'),
            'article'=>request('article')
        ]);
        return back();
    }
    public function show_com($id){
        $news=Event::find($id);
        return view('com_news',compact('news'));
    }
}
