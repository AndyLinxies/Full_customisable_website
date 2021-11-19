<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\footer;
use App\Models\navs;
use App\Models\social;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function nav(){
        $navigations=navs::all();
        $socials=social::all();

        return view('partials.navbar',compact('navigations','socials'));
    }

    public function navis(){
        $navis=navs::all();
        $footerbos=footer::all();
        $myContacts=Contacts::all();

        return view('backoffice.footerBackOffice',compact('navis','footerbos','myContacts'));
    }

    //Edit & Update
    public function edit($id){
        $edit2=navs::find($id);
        $edit=footer::all();
        $edit5=Contacts::find($id);
        

        return view('pages.formEditFooterNav',compact('edit2','edit','edit5'));
    }

    public function update($id,Request $request){
        $update=navs::find($id);
        $update->home=$request->home;
        $update->blog=$request->blog;
        $update->portfolio=$request->portfolio;
        $update->contact=$request->contact;
        $update->save();
        return redirect('/navFooter');
    }

}
