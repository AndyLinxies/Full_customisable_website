<?php

namespace App\Http\Controllers;

use App\Models\footer;
use App\Models\Home;
use App\Models\HomeCard;
use App\Models\navs;
use App\Models\social;
use App\Models\underHome_Porto;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class HomeController extends Controller
{
    
    public function index() {
        $homeInputs = Home::all();
        $homeCards = HomeCard::all();
        $navbar = "home";
        $navigations=navs::all();
        $myfooters=footer::all();
        $socials=social::all();
        $jaune=underHome_Porto::all();

        // dd($homeInputs);

        return view('home', compact('homeInputs', 'navbar','navigations','myfooters','socials', 'homeCards','jaune'));
    }

    public function store(Request $request){

    $store = new Home;
    $store->cell = $request->cell;
    $store->content = $request->content;
    $store->save();

    return redirect('/home');
    }

    public function edit($id)
    {
        $edit = Home::find($id);
        return view('backoffice.editPages.editHomestatic', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $update = Home::find($id);
        $update->cell = $request->cell;
        $update->content = $request->content;
        $update->save();
    
        return redirect('/homebo');
    }


}
