<?php

namespace App\Http\Controllers;

use App\Models\BookDetail;
use Illuminate\Http\Request;

class BookDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $bookDetail = $request->user()->book_details()->create($request->all());
        return redirect(route('index'));
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
