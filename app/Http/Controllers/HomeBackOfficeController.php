<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeCard;
use App\Models\Portfolios;
use Illuminate\Http\Request;

class HomeBackOfficeController extends Controller
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

    public function homeback()
    {
        $homeCards = HomeCard::all();
        $Portos1 = Portfolios::all();
        $homeInputs = Home::all();

        return view('backoffice.homeBackOffice', compact('Portos1', 'homeCards', 'homeInputs'));
    }

    public function destroy ($e){
        $destroy = Home::find($e);
        $destroy->delete();
        return redirect('/homebo');
    }
}
