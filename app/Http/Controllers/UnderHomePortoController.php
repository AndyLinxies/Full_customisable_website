<?php

namespace App\Http\Controllers;

use App\Models\social;
use App\Models\underHome_Porto;
use Illuminate\Http\Request;

class UnderHomePortoController extends Controller
{
    public function under(){
        $unders=underHome_Porto::all();
        return view('partials.portfolio.portfolio_sec2',compact('$unders'));
    }
    //work wirh us
    public function work(){
        $jaune=underHome_Porto::all();
        return view('partials.home.workwithus',compact('jaune'));

    }
    //Acceder au backoffice
    public function underBoPage(){
        $yellows=underHome_Porto::all();
        $resaux=social::all();

        return view('backoffice.yellow_social',compact('yellows','resaux'));
    }
    //Edit & Update
    public function edit($id){
        $edit3=underHome_Porto::find($id);
        $edit4=social::find($id);

        // $edit=footer::all();
        return view('pages.formEdit_Yellow_Social',compact('edit3','edit4'));
    }

    public function update($id,Request $request){
        $update=underHome_Porto::find($id);
        $update->p=$request->p;
        $update->button=$request->button;
        $update->save();
        return redirect('/yellow_social');
    }
}
