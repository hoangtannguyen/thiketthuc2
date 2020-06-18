<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Http\Requests\BookValidation;
use App\Http\Requests\CustomerValidation;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        return view('books.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookValidation $request)
    {
        $atribute = $request->all();
        Book::create($atribute);

        return redirect()->route('book.create')->with('success','#');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorys = Category::all();
        $books = Book::findOrFail($id);
        return view('books.edit',compact('books','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(BookValidation $request , $id)
    {
        $product = Book::findOrFail($id);
        $atribute = $request->all();
        $product->update($atribute);
        return redirect()->route('book.index')->with('success','#');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */

    public function active($id){
        Book::where('id',$id)->update(['active'=>1]);
        return redirect()->route('book.index')->with('active','#');
    }

    public function intive($id){
        Book::where('id',$id)->update(['active'=>0]);
        return redirect()->route('book.index')->with('intive','#');
    }

    public function showactive(){

        $books = Book::where('active',0)->get();
        return view('books.active',compact('books'));
    }

    public function showintive(){

        $books = Book::where('active',1)->get();
        return view('books.intive',compact('books'));
    }

    public function home()
    {
        $books = Book::all();
        return view('home',compact('books'));
    }



}
