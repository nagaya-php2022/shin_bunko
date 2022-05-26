<?php

namespace App\Http\Controllers;

use App\Models\BookDetail;
use Illuminate\Http\Request;
use App\Rules\IsbnIntegerRule;
use App\Rules\GroupForeignRule;

class BookDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_details = BookDetail::orderby('isbn')->paginate(20);
        return view('book_details.index', ['book_details' => $book_details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookDetail = new BookDetail;
        return view('book_details.create',['book_detail' => $bookDetail]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'isbn' => 'required | max:13',
            'name' => 'required | max:300',
            'group_code' => 'required | max:1',
            'author' => 'required | max:300',
            'publisher' => 'required | max:300',
            'published_at' => 'required | date',
            'isbn' => new IsbnIntegerRule($request->isbn),
            'group_code' => new GroupForeignRule($request->group_code),
        ]);
        $bookDetail =BookDetail::create($request->all());
        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookDetail  $bookDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BookDetail $bookDetail)
    {
        return view('book_details.show', ['book_detail' => $bookDetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookDetail  $bookDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BookDetail $bookDetail)
    {
        return view('book_details.edit',['book_detail' => $bookDetail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookDetail  $bookDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookDetail $bookDetail)
    {
        $this->validate($request, [
            'isbn' => 'required | max:13',
            'name' => 'required | max:300',
            'group_code' => 'required | max:1',
            'author' => 'required | max:300',
            'publisher' => 'required | max:300',
            'published_at' => 'required | date',
            'isbn' => new IsbnIntegerRule($request->isbn),
            'group_code' => new GroupForeignRule($request->group_code),
        ]);
        $bookDetail->update($request->all());
        return redirect(route('book_details.show',$bookDetail));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookDetail  $bookDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookDetail $bookDetail)
    {
        $bookDetail->delete();
        return redirect(route('book_details.show'));
    }
}
