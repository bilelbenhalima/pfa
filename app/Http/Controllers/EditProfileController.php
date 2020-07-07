<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class EditProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userid =  \Auth::user()->id ;

        //$docteur = \DB::table('docteurs')->where(function ($query) use ($userid) {
      //    $query->where('users_id', '=', $userid);
    //    })->get();

      $docteur= \App\Docteur::where('users_id', '=', $userid)->first();
        if ($docteur === null) {
          // user doesn't exist
          activity()->log('User login witout docteur');
          return view('creadocteur');
        }
        else{
            return view('editdoctorprofile', compact('docteur','editdoctorprofile'));
         //dd($docteur);
        }


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
        \App\Docteur::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   activity()->log('Updated Docteur');
        $docteur = \App\Docteur::findOrFail($request->id);
        if ($docteur){
          $docteur->update($request->all());
        }
        activity()->log('Updated Docteur');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
