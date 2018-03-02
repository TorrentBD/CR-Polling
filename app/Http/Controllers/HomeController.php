<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Voter;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }


    public function candidate(Request $request)
    {   
        $cand = Candidate::paginate(5);

        return view('admin.candidate_list')->with('cnd',$cand);
    }

    public function c_delete($id)
    {   
        $c = Candidate::findOrFail($id);

        $c->delete();
        return redirect()->back();
    }

    //voter..........


    public function voter(Request $request)
    {   
        $voter = Voter::paginate(5);

        return view('admin.voter_list')->with('cnd',$voter);
    }

    public function v_delete($id)
    {   
        $v = Voter::findOrFail($id);

        $v->delete();
        return redirect()->back();
    }
}
