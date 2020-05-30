<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogPosts = BlogPost::latest()->paginate(5);
    }

    public function show(BlogPost $blogPost)
    {
        abort_unless($blogPost->published, 404);

        return view('blog_post.show', compact('blogPost'));
    }
}
