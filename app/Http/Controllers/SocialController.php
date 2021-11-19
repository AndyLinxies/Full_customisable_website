<?php

namespace App\Http\Controllers;

use App\Models\social;
use App\Models\underHome_Porto;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function soc()
    {
        $socials = social::all();
        return view('home', compact('socials'));
    }

    //Edit & Update
    public function edit($id)
    {
        $edit4 = social::find($id);
        $edit3 = underHome_Porto::find($id);
        return view('pages.formEdit_Yellow_Social', compact('edit4', 'edit3'));
    }

    public function update($id, Request $request)
    {
        $update = social::find($id);
        $update->twitter = $request->twitter;
        $update->facebook = $request->facebook;
        $update->google = $request->google;
        $update->mail = $request->mail;
        $update->save();
        return redirect('/yellow_social');
    }

    public function store(Request $request)
    {
        $store = new social();
        $store->twitter = $request->twitter;
        $store->facebook = $request->facebook;
        $store->google = $request->google;
        $store->mail = $request->mail;
        $store->save();

        return redirect('/');
    }

    // public function edit($id)
    // {
    //     $edit = social::find($id);
    //     return view('backoffice.editPages.editSocial', compact('edit'));
    // }

    // public function update($id, Request $request)
    // {
    //     $update = social::find($id);
    //     $update->twitter = $request->twitter;
    //     $update->facebook = $request->facebook;
    //     $update->google = $request->google;
    //     $update->mail = $request->mail;
    //     $update->save();

    //     return redirect('/');
    // }
}
