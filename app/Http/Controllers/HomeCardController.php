<?php

namespace App\Http\Controllers;

use App\Models\HomeCard;
use Illuminate\Http\Request;

class HomeCardController extends Controller
{
    public function store(Request $request)
    {
        $store = new HomeCard();
        $store->title = $request->title;
        $store->text = $request->text;
        $store->logo = $request->logo;
        $store->save();

        return redirect('/');
    }

    
    public function show($id)
    {
        $show = HomeCard::find($id);
        return view('backoffice.showPages.showHome', compact('show'));
    }

    public function edit($id)
    {
        $edit = HomeCard::find($id);
        return view('backoffice.editPages.editHome', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $update = HomeCard::find($id);
        $update->title = $request->title;
        $update->text = $request->text;
        $update->logo = $request->logo;
        $update->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $destroy = HomeCard::find($id);
        $destroy->delete();

        return redirect('/homebo');
    }

}
