<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\footer;
use App\Models\navs;
// use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function footer(){
        $myfooters=footer::all();
        return view('partials.footer',compact('myfooters'));
    }
    public function footerbo(){
        $footerbos=footer::all();
        $navis=navs::all();
        $myContacts=Contacts::all();

        return view('backoffice.footerBackOffice',compact('footerbos','navis','myContacts'));
    }

    //Edit & Update
    public function edit($id){
        $edit=footer::find($id);
        $edit5=Contacts::find($id);
        $edit2=navs::find($id);
        // dd($edit);
        return view('pages.formEditFooterNav',compact('edit','edit5','edit2'));
    }

    public function update($id,Request $request){
        $update=footer::find($id);
        $update->mail=$request->mail;
        $update->p_titre1=$request->p_titre1;
        $update->p1=$request->p1;
        $update->p_titre2=$request->p_titre2;
        $update->p2=$request->p2;
        $update->p_titre3=$request->p_titre3;
        $update->p3=$request->p3;
        $update->p_titre4=$request->p_titre4;
        $update->p4=$request->p4;
        $update->link2=$request->link2;
        $update->link3=$request->link3;
        $update->fax=$request->fax;
        $update->name=$request->name;
        $update->street=$request->street;
        $update->bp=$request->bp;
        $update->save();
        return redirect('/navFooter');
    }


}
