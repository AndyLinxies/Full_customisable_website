<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\footer;
use Illuminate\Http\Request;
use App\Models\navs;
use App\Models\social;

class ContactsController extends Controller
{
    public function contactz(){
        $navigations=navs::all();
        $myfooters=footer::all();
        $socials=social::all();

        $itemsConts=Contacts::all();
        return view('pages.contact',compact('itemsConts','navigations','myfooters','socials'));
    }
    //section contact dans footerbo
    public function contactbo(){
        $myContacts=Contacts::all();
        return view('backoffice.footerBackOffice', compact('myContacts'));
    }
    //Edit & Update
    public function edit($id){
        $edit5=Contacts::find($id);
        $edit2=navs::find($id);
        $edit=footer::find($id);

        return view('pages.formEditFooterNav',compact('edit5','edit2','edit'));
    }

    public function update($id,Request $request){
        $update=Contacts::find($id);
        $update->h2=$request->h2;
        $update->paragraph=$request->paragraph;
        $update->save();
        return redirect('/navFooter');
    }
}
