<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogText;
use Illuminate\Http\Request;

class BlogTextController extends Controller
{
    public function blogbackstatic(){
        $blogInputStatics = BlogText::all();
        $blogInputs = Blog::all();
        return view('backoffice.blogBackOffice', compact('blogInputStatics','blogInputs'));
    }

    public function store(Request $request)
    {
        $store = new Blog();
        $store->title = $request->cell;
        $store->text = $request->content;
        $store->save();

        return redirect('/blog');
    }

    public function edit($id)
    {
        $edit = BlogText::find($id);
        return view('backoffice.editPages.editBlogStatic', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $update = BlogText::find($id);
        $update->cell = $request->cell;
        $update->content = $request->content;
        $update->save();
    
        return redirect('/blogbo');
    }


}
