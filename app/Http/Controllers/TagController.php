<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function list(){
        $tags = Tag::orderBy('id', 'desc')->get();
        return view('tags', compact('tags'));
    }
    public function add(){
        return view('add-tag');
    }
    public function save(Request $request){
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        return back()->with('tagCreated', 'Tag cree avec succee');
    }
    public function delete(Tag $tag){
        $tag->delete();
        return redirect('/tags');
    }
    public function edit(Tag $tag){
        return view('edit-tag', compact('tag'));
    }
    public function update(Request $request){
        $tag = Tag::find($request->id);
        $tag->name = $request->name;
        $tag->save();
        return redirect(route('tags.list'));
    }
}
