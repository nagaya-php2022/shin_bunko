<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use DateTime;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals = Rental::orderby('created_at', 'desc')->paginate(20);
        /*$rentals = Rental::with(['book' => function($query){
            $query->with('book_detail');
        }])->orderby('created_at', 'desc')->paginate(20);*/
        return view('rentals.index', ['rentals' => $rentals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("rentals.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookIds = $request->bookIds;
        
        foreach ($bookIds as $bookId) {
            $book = new Rental;
            $book->book_id = $bookId;
            // $book->staff_id = \Auth::user()->id;
            $book->staff_id = 1;
            $book->member_id = $request->memberId;
            $book->save();
        }
        
        return redirect()->route("rentals.create", ["show_notice" => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        $book = $rental->book;
        $member = $rental->member;
        $staff = $rental->staff;
        return view('rentals.show', ['rental' => $rental, 'book' => $book, 'member' => $member, 'staff' => $staff]);
    }

    /**
     * get book name and check returnable from return page(rental/edit)
     * 
     * @param $book_id
     */
    public function returnableBookData($book_id) {
        $error = "";
        $name = "";
        $id = "";
        $bookId = "";
        $ok = false;
        
        $exists = Rental::where("book_id", $book_id)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->exists();
        
        if($exists) {
            $rental = Rental::where("book_id", $book_id)
                ->orderBy("created_at", "desc")
                ->limit(1)
                ->get()[0];
            
            if(!is_null($rental->returned_at)) {
                $error = "また貸出処理が済んでいない資料です";
            } else {
                $name = $rental->book->book_detail->name;
                $bookId = $rental->book->id;
                $id = $rental->id;
                $ok = true;
            }
        } else {
            $error = "また貸出処理が済んでいない資料です";
        }
        
        return array(
            // "rental" => $rental,
            "rental" => array( "name" => $name, "id" => $id, "bookId" => $bookId),
            "ok" => $ok,
            "error" => $error,
        );
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        return view("rentals.edit");
    }

    /**
     * Return from return page
     * 
     * @param int[] $rental_ids
     */
    public function returnBooks(Request $request) {
        
        foreach ($request->rentalIds as $rental_id) {
            $rental = Rental::find($rental_id);
            if(!is_null($rental)) {
                $rental->returned_at = new DateTime();
                $rental->save();
            }
        }
        
        return redirect("rentals/edit");
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }

    public function search(Request $request)
    {
        $query = Rental::select('id', 'book_id', 'member_id', 'created_at', 'returned_at');
        if ($request->book_id) {
            $query->where('book_id', '=', $request->book_id);
        }
        $rentals = $query->get();
        return view('rentals.search', ['rentals' => $rentals]);
    }
}