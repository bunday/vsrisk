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
        $impact->isms_no = Auth::user()->id;
        $impact->save();
        
        $like = new Likelihood();
        $like->scale = Input::get('like');
        $like->isms_no = Auth::user()->id;
        $like->save();
    
        /*$formular = new formular();
        $formular->value = Input::get('formular');
        $formular->isms_no = Auth::user()->id;
        $formular->save(); */

        return redirect('/home');
    }
}
