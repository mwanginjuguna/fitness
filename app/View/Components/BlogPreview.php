<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class BlogPreview extends Component
{
    public function render()
    {
        $posts = Post::query()
            ->where('is_published', '=', true)
            ->orderBy('views', 'desc')
            ->limit(3)->get();

        $featured = $posts->first();

        $otherPosts = $posts->slice(1, 2);

        return view('components.parts.blog-preview', [
            'featured' => $featured,
            'otherPosts' => $otherPosts
        ]);
    }
}
