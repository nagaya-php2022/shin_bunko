<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

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
        print_r($request->all());
        
        foreach ($bookIds as $bookId) {
            $book = new Rental;
            $book->book_id = $bookId;
            // $book->staff_id = \Auth::user()->id;
            $book->staff_id = 1;
            $book->member_id = $request->memberId;
            $book->save();
        }
        
        return array("result" => "success");
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
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