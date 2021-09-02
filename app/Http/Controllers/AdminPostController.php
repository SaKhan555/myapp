<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index',[
            'posts' => Post::paginate(10),
        ]);
    }
    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
//        $post = new Post();
        $attributes = $this->validatePost();
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);
        return redirect('/')->with('success', 'Your post has been published.');

    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit',
            [
                'post' => $post
            ]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);
        $attributes['user_id'] = auth()->id();
        if($attributes['thumbnail'] ?? false)
        {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $post->update($attributes);
        return back()->with('success', 'Post Updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post Deleted.');
    }

    /**
     * @param $post
     * @return array
     */
    protected function validatePost(?Post $post = null)
    {
        $post ??= new Post();
        return request()->validate([
            'title' => 'required|min:2|max:255',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'thumbnail' => $post->exists ? ['image'] : ['image', 'required'],
            'excerpt' => 'required|min:3|max:255',
            'body' => 'required|min:3',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);
    }
}
