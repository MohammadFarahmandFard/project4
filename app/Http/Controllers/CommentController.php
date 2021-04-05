<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
    public function com_page(){
        $com=  Comment::all();
        return view('com_page',compact('com'));
    }
    public function com_save(){
        Comment::create([
            'user_id'=>auth()->user()->id,
            'article'=>request('article1')
        ]);
        return back()->with('success','ok');
    }
}
