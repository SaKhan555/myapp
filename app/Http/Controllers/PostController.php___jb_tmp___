<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
//dd(auth()->user()->can('admin'));
//        dd(Gate::allows('admin'));
//        $this->authorize('admin');
        return view(
            'posts.index',
            [
                'posts' => Post::latest()
                    ->filter(request(['search', 'category', 'author']))
                    ->simplePaginate(6)
                ->withQueryString(),
            ]
        );
    }

   

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    protected function getPosts()
    {
        //        return Post::latest()->filter()->get();
        //        if(request('search')) {
        //            $posts->where('title', 'like', '%' . request('search') . '%')
        //                ->orWhere('body', 'like', '%' . request('search') . '%');
        //        }
        //        return $posts->get();
    }
}
