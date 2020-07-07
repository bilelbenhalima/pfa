<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
      $userid =  \Auth::user()->id ;
      $usergrade=  \Auth::user()->grade ;
      $doctorid=\Auth::user()->doctorid ;




    $docteur= \App\Docteur::where('users_id', '=', $userid)->first();
      if ($docteur === null && $usergrade==='docteur' ) {
        // user doesn't exist
        activity()->log('Creation new docteur');
        return view('creadocteur');
      }
      else if ($usergrade==='docteur'){

        $fromDate = Carbon::today();
        $toDate = Carbon::tomorrow();

        $patientsjour =\App\Event::where('eve_user_id',$userid) ->whereBetween('created_at', array($fromDate->toDateTimeString(), $toDate->toDateTimeString()) )->count();

        activity()->log('Opened admin page');

        return view('admin', compact('docteur','patientsjour'));
      }
      else if($docteur === null && $usergrade==='secretaire'){
        return view('creatsecretaireprofile');
      }
      else if ($usergrade==='secretaire'){
        $fromDate = Carbon::today();
        $toDate = Carbon::tomorrow();

        $patientsjour =\App\Event::where('eve_user_id',$doctorid) ->whereBetween('created_at', array($fromDate->toDateTimeString(), $toDate->toDateTimeString()) )->count();

        activity()->log('Opened admin page');

        return view('admin', compact('docteur','patientsjour'));
      }
      

    }
}
