<?php

namespace App\Http\Controllers;

use App\Models\footer;
use App\Models\navs;

use App\Models\Portfolios;
use App\Models\social;
use App\Models\underHome_Porto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfoliosController extends Controller
{
    public function porto(){
        $navigations=navs::all();
        $unders=underHome_Porto::all();
        $myfooters=footer::all();
        $Portos=DB::table('portfolios')
        ->take(15)
        ->get();

        $socials=social::all();
        
        return view('pages.portofolio',compact('Portos','navigations','unders','myfooters','socials'));
    }

    
    
}
