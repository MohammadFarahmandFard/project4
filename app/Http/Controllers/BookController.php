<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function book_form(){
        //return "......";
      return view('book_form');
	}
	public function save(Request $request){
            $this->validate($request,[
                'name1'=>'required|max:15',
                'author1'=>'required|max:15|min:5',
                'year'=>'required'
            ],[
                'name1.required'=>'وارد کردن این قسمت الزامی می باشد',
                'author1.required'=>'وارد کردن این قسمت الزامی می باشد',
                'year.required'=>'وارد کردن این قسمت الزامی می باشد',
                'name1.max'=>'بیش از 15 کاراکتر مورد قبول نمی باشد',
                'author1.min'=>'نام نویسنده خیلی کوتاه است'
            ]);
		Book::create([
			'name'=>request('name1'),
			'author'=>request('author1'),
			'yearofedit'=>request('year')
		]);
		return back()->with("success",'ok');
	}
	public function show(){
		$books=Book::all();
		return view('show_book',compact('books'));
	}
        public function delete($id){
            Book::find($id)->delete();
            return back();
        }
        public function update1($id){
            $book=Book::find($id);
            return view('edit',compact('book'));
        }
        public function update2($id){
            $book=Book::find($id);
            $book->name=  request('name1');
            $book->author=  request('author1');
            $book->yearofedit=  request('year');
            $book->save();
            return redirect('/book_show');
        }
}
