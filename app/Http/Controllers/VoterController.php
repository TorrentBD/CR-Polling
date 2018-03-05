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
        if (Auth::attempt ( array (
                'voter_id' => $request->get ( 'voter_id' ),
                'password' => $request->get ( 'password' ) 
        ) )) {
            session ( [ 
                    'name' => $request->get ( 'username' ) 
            ] );
            return Redirect::back ();
        } else {
            Session::flash ( 'message', "Invalid Credentials , Please try again." );
            return Redirect::back ();
        }
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
            'pi' => '3.14'
        ];

        return view('voters.vote')->with('cand',$cand);
    }
     

}
