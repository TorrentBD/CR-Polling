<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Candidate;
use App\Voter;
use Auth;
class VoterController extends Controller
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
        return view('voters.login');
    }

    public function login(Request $request) {
        $voter = Voter::where(['voter_id'=>$request->voter_id,'password'=>$request->password,'status'=>"n"]);

        if($voter)
            return redirect('voting');

        return redirect('voters.login');
    }

    public function logout() {
        Session::flush ();
        Auth::logout ();
        return redirect('/');
    }



    public function voting(Request $request)
    {

       $cand = Candidate::all();

        return view('voters.voting')->with('cnd',$cand);
    }

    public function vote(Request $request)
    {

        $cand = [
            'p' => $request->p,
             'vp' => $request->vp,
            'cr' => $request->cr,
        ];

        Candidate::where('name',$request->p)->Increment('vote');
        Candidate::where('name',$request->vp)->Increment('vote');
        Candidate::where('name',$request->cr)->Increment('vote');

        return view('voters.vote')->with('cand',$cand);
    }

    public function vote_now(Request $request)
    {
         $p = Candidate::where('name',$request->vp )->update(['vote'=>1]);

        return redirect('voting');
    }
     

}
