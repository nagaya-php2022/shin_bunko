<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::orderby('created_at', 'desc')->paginate(20);
        return view('members.index', ['members' => $members]);
    }
    
    public function memberInfo($id) {
        $ok = false;
        $error = "";
        
        try {
            $member = Member::where("id", $id)->first();
            if(is_null($member)) {
               $error = "会員データが見つかりません"; 
            } else {
                $ok = true;
            }
        } catch(\Exception $e) {
            $error = "エラー";
        }
        
        return array("ok" => $ok, "name" => $member->name, "error" => $error);
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
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.show', ['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }

    public function search(Request $request)
    {
        $query = Member::select('id', 'name', 'tel');
        if ($request->member_id) {
            $query->where('id', '=', $request->member_id);
        }
        $members = $query->get();
        return view('members.search', ['members' => $members]);
    }
}
