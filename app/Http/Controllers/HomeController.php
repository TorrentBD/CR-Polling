<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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

    public function addcandidate()
    {
        return view('admin.add_candidate');
    }

    public function save_candidate(Request $request){

        //akta akta kore nite hobe............ may be
        //$cand = $request->except('photo');

        $validator = Validator::make($request->all(), [

           'name' => 'required|string|max:50',
           'student_id' => 'required|unique:candidates',
           'session' => 'required|string',
           //'photo'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $cand = new Candidate; 
        $cand->position = $request->podition;
        $cand->name = $request->name;
        $cand->student_id = $request->student_id;
        $cand->gender = $request->gender;
        $cand->session = $request->session;
        $cand->year = $request->year;

        //image upload
        $photo=$request->photo;
        if($photo){
            $imageName=$photo->getClientOriginalName();
            $photo->move('images',$imageName);
            $cand['photo']=$imageName;
        }




        Candidate::create($cand);

        return redirect('candidate');
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

    public function addvoter()
    {   

        return view('admin.add_voter');
    }


    public function save_voter(Request $request)
    {   
        
        $validator = Validator::make($request->all(), [

           'name' => 'required|string|max:50',
           'voter_id' => 'required|unique:voters',
           'session' => 'required|string',
           'year' => 'required|string', 
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $vot = new Voter;

        $vot->voter_id = $request->voter_id;
        $vot->name = $request->name;
        $vot->password = $request->password;
        $vot->session = $request->session;
        $vot->year = $request->year;
        $vot->status = "n";

        $vot->save();

        return redirect('voter');
    }

    public function v_delete($id)
    {   
        $v = Voter::findOrFail($id);

        $v->delete();
        return redirect()->back();
    }



    public function download(Request $request)
    {
         $data=DB::table('voters')->select('name','voter_id','session','year','status')->get();

         $tot_record_found=0;
        if(count($data)>0){
            $tot_record_found=1;
            //First Methos          
            $export_data="Voter Name,Voter Id,BVoter Session,Voter Year,Vote Statua\n";

            foreach($data as $value){
                $export_data.=$value->name.','.$value->voter_id.','.$value->session.','.$value->year.','.$value->status."\n";
            }
            return response($export_data)
                ->header('Content-Type','application/csv')               
                ->header('Content-Disposition', 'attachment; filename="list.csv"')
                ->header('Pragma','no-cache')
                ->header('Expires','0');                     
        }
        return redirect('home');    
    }


}
