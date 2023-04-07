<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function get(){
        return view('blog');
    }

    public function index(){
        $data = Blog::all();
        return view('blog.index' ,compact('data'));
    }

    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){
        Blog::create($request->all());
        
        // $data=Blog::all();
        // return view('blog.index', compact('data'));

        return redirect()->route('blog.index');
    }

    public function show(Blog $blog)
    {
        return view('blog.show',compact('blog'));
        
    }
    public function edit(Blog $blog)
    {
        //dd($blog);
        return view('blog.edit', compact('blog'));

    }   
    public function update(Request $request, Blog $blog)
    {
        //dd($request->all());
        //$data = Blog::where('id', $id)->first();
        
        // $data->update([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'is_active' => $request->is_active
        //     //'is_active' => $request->has('is_active')? 1 : 0
        // ]);

        $blog->update($request->all());
        return redirect()->route('blog.index');
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
