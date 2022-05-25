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
        $books = new Book;
        return view('books.create',['books' => $books]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = $request->user()->books()->create($request->all());
        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $books)
    {
        return view('books.show', ['book' => $books]);
    }
    
    public function rentableBookData($id) {
        $ok = true;
        $error = "";
        $book = Book::where("id", $id)->first();
        if(!is_null($book)) {
            $book["detail"] = BookDetail::where("isbn", $book->isbn)->first();
            
            $exists = Rental::where("book_id", $book->id)
                ->orderBy("created_at", "desc")
                ->limit(1)
                ->exists();
            
            if($exists) {
                $rental = Rental::where("book_id", $book->id)
                    ->orderBy("created_at", "desc")
                    ->limit(1)
                    ->get()[0];
                    
                if(!isset($rental->returned_at)) {
                    $ok = false;
                    $error = "返却されていない資料です";
                }
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
        return view('books.edit',['book' => $book]);
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
        $books->update($request->all());
        return redirect(route('books.show',$books));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $books->delete();
        return redirect(route('books.show'));
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
