<?php

namespace App\Http\Controllers;

use App\Blog;
use Session;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array  =   array('user_id' =>  \Auth::user()->id);
        $blogs  =   Blog::where($array)->paginate(10);
        $array  =   array('blogs'   =>  $blogs);
        return view('home', $array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog   =   new Blog;
        $blog->title    =   $_REQUEST['title'];
        $blog->body    =   $request->body;
        $blog->user_id  =   \Auth::user()->id;
        $blog->save();
        Session::flash('alert-success', 'Blog added successfully');

        return redirect( route('myblogs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog   =   Blog::find($id);

        $array  =   array('blog'    =>  $blog);
        return view('showOneBlog', $array); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $blog   =   Blog::find($id);

        $array  =   array('blog'    =>  $blog);
        return view('editBlog', $array); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog   =    Blog::find($id);
        $blog->title    =   $_REQUEST['title'];
        $blog->body    =   $request->body;
        $blog->save();
        Session::flash('alert-success', 'Blog updated successfully');

        return redirect( route('myblogs.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog   =   Blog::findOrFail($id);
        $blog->delete();
        \Session::flash('alert-success', 'Blog deleted successfully');

        return redirect (route('myblogs.index'));
    }
}
