<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BlogController extends Controller
{
    public function create() {
        return view('blog.create');
    }

    public function strore(Request $request) {
        dd($request->all());
    }


    public function index(BlogFilterRequest $request): View {
        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);
    }

    public function show(string $slug, Post $post): RedirectResponse | View
    {

        if ($post->slug !== $slug) {
            return to_route('blog.show', [
                'slug' => $post->slug,
                'id' => $post->id
            ]);
        }

        return view('blog.show', [
            'post' => $post
        ]);
    }
}
