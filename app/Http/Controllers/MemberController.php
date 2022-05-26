<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Rules\TelRule;

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
        $member = new Member;
        return view('members.create', ['member' => $member]);
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
            'name' => 'required | max:75',
            'address' => 'required | max:300',
            'tel' => 'required | max:20',
            'email' => 'max:50',
            'birthday' => 'date',
            'deleted_at' => 'date',
            'tel' => new TelRule($request->tel),
        ]);
        $member = Member::create($request->all());
        return redirect(route('members.index'));
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
        return view('members.edit',['member' => $member]);
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
        $member->update($request->all());
        return redirect(route('members.show',$member));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect(route('members.index'));
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
