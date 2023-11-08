<?php

namespace App\Http\Controllers;

use App\Data\PostData;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('Posts/Index', [
            'posts' => PostData::collection(Post::all())
        ]);
    }

    public function show(Post $post)
    {
        return Inertia::render('Posts/Show', [
            'post' => PostData::from($post)
        ]);
    }

    public function create()
    {
        return Inertia::render('Posts/Create');
    }

    public function store(PostData $data)
    {
        $post = Post::query()->create($data->toArray());

        return redirect()->route('posts.show', $post);
    }
}
