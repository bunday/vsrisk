<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Iso;
use DB;
use Excel;
use App\Likelihood;
use App\Impact;
use App\formular;
use Auth;
use Criteria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //import excel to database
    public function importExcel()
    {
        
        $path = Input::file('iso');
        $data = Excel::load($path->getRealPath(), function($reader) {
        })->get();
        if(!empty($data) && $data->count()){
            foreach ($data as $key => $value) {
                $insert[] = ['ref' => $value->ref, 'control_point' => $value->control_point, 'applies' => $value->applies, 'statement' => $value->statement, 'responsibility' => $value->responsibility, 'reference' => $value->reference,];
            }
            if(!empty($insert)){
                DB::table('isos')->insert($insert);
                dd('Insert Record successfully.');
            }
        }
        return redirect('/scale');
    }

    public function management_scale()
    {
        $impact = new Impact();
        $impact->scale = Input::get('imp'); 
        $impact->isms_no = Auth::user()->organisation_id;
        $impact->save();
        
        $like = new Likelihood();
        $like->scale = Input::get('like');
        $like->isms_no = Auth::user()->organisation_id;
        $like->save();
    
        /*$formular = new formular();
        $formular->value = Input::get('formular');
        $formular->isms_no = Auth::user()->id;
        $formular->save(); */

        return redirect('/home');
    }

    public function assessment(){
        $users = User::all();
        return view('assessment', ['users' => $users]);
    }

    public function criteria(){
        Criteria::create([
            'criteria' => Input::get('criteria'),
            'organisation_id' => Auth::user()->organisation_id,
        ]);
    }

    public function user(){
        User::create([
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'password' => bcrypt(Input::get('password')),
            'fullname' => Input::get('fullname'),
            'organisation_id' => Auth::user()->organisation_id,
            'type' => $data['type'],
        ])
    }

    public function add_asset(){
        $asset = new Asset();
        $asset->organisation_id = Auth::user()->organisation_id;
        $asset->name = Input::get('name');
        $asset->owner = Input::get('owner');
        $asset->department = Input::get('department');
        $asset->group = Input::get('group');
        $asset->save();
    }


}
