<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class BlogPostController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogposts = BlogPost::all();
        return view('posts.index', [
            'blogposts' => $blogposts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

  
    /**
     * Handle an incoming registration request.
     *
     *
     */

    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'picture' =>['required','file','mimes:jpg,png,gif', 'max:3072'],
        ]);

        $path=$request->file('picture')->storePublicly('pictures');

        $newblogpost = BlogPost::create([
            'title' => $request->title,
            'content' => $request->content,
            'picture' => $path,
            'user_id' => Auth::user()->id,
            
        ]);
         return redirect('blogposts/'. $newblogpost->id); 
        /* return redirect(RouteServiceProvider::'blogposts/'. $newblogpost->id); */
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogpost)
    {
        return view('posts.show', [
            'blogpost' => $blogpost,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}
