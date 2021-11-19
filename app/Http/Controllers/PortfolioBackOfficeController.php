<?php

namespace App\Http\Controllers;

use App\Models\footer;
use App\Models\navs;
use App\Models\Portfolios;
use App\Models\social;
use Illuminate\Http\Request;

class PortfolioBackOfficeController extends Controller
{
    public function portobo(){
        return view('backoffice.portofolioBackOffice');
    }
    public function store(Request $request){
        $store=new Portfolios();
        $store->image_link=$request->image_link;
        $store->titre_h3=$request->titre_h3;
        $store->description=$request->description;
        $store->save();
        return redirect()->back();

    }
    public function portoback(){
        $Portos=Portfolios::all();
        return view('partials.portfolio.portfolio_sec1',compact('Portos'));
    }

    public function index(){
        $portos1=Portfolios::all();
        return view('backoffice.portofolioBackOffice',compact('portos1'));
    }

    //suppression
    public function destroy($id){
        $destroy = Portfolios::find($id);
        $destroy->delete();
        return redirect("/portobo");
    }

    //show
    public function show($id){
        $navigations=navs::all();
        $show = Portfolios::find($id);
        $socials=social::all();
        $myfooters=footer::all();

        return view('pages.showPorto',compact('show','navigations','socials','myfooters'));
    }
    //Edit & Update
    public function edit($id){
        $edit =Portfolios::find($id);
        return view('pages.formEditPortfolio',compact('edit'));
    }

    public function update($id, Request $request){
        $update =Portfolios::find($id);
        $update->image_link=$request->image_link;
        $update->titre_h3=$request->titre_h3;
        $update->description=$request->description;
        $update->save();
        return redirect('/portobo');
    }
}
