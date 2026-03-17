<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1-qadam
        // $posts = Post::all();
        // $posts = Post::where('title', 'This was created by protected')->get();
        // $posts = Post::where('title', 'This was created by protected')->first();
        // $posts->title = 'Sobirjonov Shoxjaxon';
        // $posts->save();
        // $posts = Post::find(1);
        // dd($posts);

        // 2-qadam  This is how to create new information 
        // $newPost = new Post;
        // $newPost->title = 'newPost 2';
        // $newPost->image = 'devor.png';
        // $newPost->content = 'new Post content Sobirjonov Shoxjaxon Whats up?';
        // $newPost->user_id = 1;
        // $newPost->save();

        // 3-qadam  This is how to create new information in basic way
        // $newPost = Post::create([
        //     'title' => 'This was created by protected',
        //     'image' => 'youtube.jpg',
        //     'content'=>'lorem Ipsum My name is Mr Johnson today I am going to say that we need to discuss about our topic',
        //     'user_id' => 1,
        // ]);
        // dd(($newPost));
        


        // 4th step This is how to update information 
        // $post = Post::find(4);
        // $post->title = 'I updated this title';
        // $post->save(); 

        // 5th step This is how to update information in basic way 
        // $post = Post::find(4)->update([

        //     'title' => 'We updated this title on the other hand'
        // ]);

        // 6th step isDirty 
        // $post = Post::find(4);
        // $post->title = 'Sobirjonov Shoxjaxon';
        // $post->save();

        // if($post->wasChanged('title')){

        //     return "It is dirty";
        // }else{
        //     return "It was not changed";
        // }
        // $result = $post->isDirty();
        // $result = $post->isClean();

        // return $result;


        // 7th step Delete information 
        // $post = Post::find(2);
        // $post->delete();

        // return 'deleted';

        // return view('admin.posts.index');

        // Post::forceDestroy(2); // This method delete from deleted_at too
        // Post::destroy(3);
        // return 'Soft Deleted';

        // $posts = Post::all();
        $posts = Post::withTrashed()->where('id',3)->restore(); // It is restore this code from deleted_at table
        
        $post = Post::all();
        dd($post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
