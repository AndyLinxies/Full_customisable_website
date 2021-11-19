<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogText;
use App\Models\footer;
use App\Models\navs;
use App\Models\social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog() {
        $blogInputs = DB::table('blogs')->take(4)->get();
        $blogTexts = BlogText::all();
        $navigations=navs::all();
        $myfooters=footer::all();
        $socials=social::all();

        return view('pages.blog', compact('blogInputs','navigations','myfooters','socials', 'blogTexts'));
    }

    public function store(Request $request){

        $request->validate([
            'titre_h3' => 'required',
            'paragraph' => 'required',
            'image_link' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);
    
        $newImageName = time() . '-' .$request->name . '.' .$request->image_link->extension();
    
        $request->image_link->move(public_path('images'), $newImageName);
    
    
    $store = new Blog;
    $store->image_link = $request->image_link;
    $store->titre_h3 = $request->titre_h3;
    $store->paragraph = $request->paragraph;
    $store->image_path = $newImageName;
    $store->save();

    return redirect('/blog');
    }

    public function destroy($id){
        $destroy = Blog::find($id);
        $destroy->delete();

        return redirect('/blogbo');
    }
}
