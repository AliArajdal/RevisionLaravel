<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list(){
        $posts = Post::orderBy('id', 'desc')->get();    // Post::all();
        return view('posts', compact('posts')); // ['posts' => $posts]
    }
    public function add(){
        return view('add-post');
    }
    public function save(Request $request){
        $post = new Post();
        $post->name = $request->name;
        $post->content = $request->contenu;
        $post->save();
        return back()->with('postCreated', 'Post cree avec succee');
    }
    public function delete(Post $post){
        $post->delete();
        return redirect('/posts');
    }
    public function edit(Post $post){
        return view('edit-post', compact('post'));
    }
    public function update(Request $request){
        $post = Post::find($request->id);
        $post->name = $request->name;
        $post->content = $request->contenu;
        $post->save();
        return redirect(route('posts.list'));
    }
    public function details(Post $post){
        $postTags = $post->tags;
        $allTags = Tag::all();
        $postComments = $post->comments;
        return view('details-post', compact('post', 'postTags', 'allTags', 'postComments'));
    }
    public function affectTag(Request $request){
        $post = Post::find($request->post_id);
        $post->tags()->attach($request->tag_id);
        return back();
    }
    public function disaffecTag(Request $request){
        $post = Post::find($request->post_id);
        $post->tags()->detach($request->tag_id);
        return back();
    }
}
