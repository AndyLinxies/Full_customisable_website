<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogText;
use Illuminate\Http\Request;

class BlogBackOfficeController extends Controller
{
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
    
    public function blogback(){
        $blogInputs = Blog::all();
        return view('backoffice.blogBackOffice', compact('blogInputs'));
    }

    public function show($id){
        $show = Blog::find($id);
        return view('backoffice.showPages.showBlog', compact('show'));
    }

    public function edit($id){
        $edit = Blog::find($id);
        return view('backoffice.editPages.editBlog', compact('edit'));
    }

    public function update($id, Request $request){
        $request->validate([
            'titre_h3' => 'required',
            'paragraph' => 'required',
            'image_link' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);
    
        $newImageName = time() . '-' .$request->name . '.' .$request->image_link->extension();
    
        $request->image_link->move(public_path('images'), $newImageName);
    
        $update = Blog::find($id);
        $update->image_link = $request->image_link;
        $update->titre_h3 = $request->titre_h3;
        $update->paragraph = $request->paragraph;
        $update->image_path = $newImageName;
        $update->save();
    
        return redirect('/blog');
    }
}
