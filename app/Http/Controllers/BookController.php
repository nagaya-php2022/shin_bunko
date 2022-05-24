<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookDetail;
use App\Models\Rental;
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
        $books = Book::with('book_detail')->orderby('created_at', 'desc')->paginate(20);
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }
    
    public function rentableBookData($id) {
        $ok = true;
        $error = "";
        $book = Book::where("id", $id)->first();
        if(!is_null($book)) {
            $book["detail"] = BookDetail::where("isbn", $book->isbn)->first();
            
            // 返却チェック
            $rental = Rental::where("book_id", $book->id)
                ->orderBy("created_at", "desc")
                ->take(1)
                ->get();
            if(!is_null($rental) && isset($rental->returned_at)) {
                $ok = false;
                $error = "返却されていない資料です";
            }
        }
        
        // 資料データの有無
        if(is_null($book) || is_null($book["detail"])) {
            $ok = false;
            $error = "本のデータがみつかりませんでした";
        }
        return array("ok" => $ok, "book" => $book, "error" => $error);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }

    public function search(Request $request)
    {
        $query = Book::select('id', 'isbn');
        if ($request->book_id) {
            $query->where('id', '=', $request->book_id);
        }
        $books = $query->orderBy('id')->get();
        return view('books.search', ['books' => $books]);
    }
}
