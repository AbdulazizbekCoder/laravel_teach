<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create')->with([
            'categorys' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    public function store(StorePostRequest $request)
    {

        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('file_upload', $name);
        }
        $post = Post::create([
            'user_id' => 1,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'text' => $request->text,
            'photo' => $path ?? null

        ]);
        return redirect()->route('posts.index');


    }

    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'recent_post' => Post::latest()->get()->except($post->id)->take(5)
        ]);


    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with('post', $post);
    }

    public function update(StorePostRequest $request, Post $post)
    {
        if ($request->hasFile('photo')) {
            if (isset($post->photo)) {
                Storage::delete($post->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('file_upload', $name);
        }

        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'text' => $request->text,
            'photo' => $path ?? $post->photo

        ]);
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function destroy(Post $post)
    {
        if (isset($post->photo)) {
            Storage::delete($post->photo);
        }
        $post->delete();
        return redirect()->route('posts.index');
    }
}
