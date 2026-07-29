<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('categoryRelation')->latest()->paginate(15);
        return view('admin.posts.index', compact('posts'));
    }

    public function create(): View
    {
        $categories = Category::where('is_visible', true)->orderBy('sort_order')->get();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:posts,slug',
            'excerpt'          => 'nullable|string|max:500',
            'content'          => 'nullable|string',
            'author'           => 'nullable|string|max:255',
            'category'         => 'nullable|string|max:255',
            'category_id'      => 'nullable|exists:categories,id',
            'featured_image'   => 'nullable|image|max:5120',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'og_image'         => 'nullable|string|max:255',
            'is_published'     => 'boolean',
        ]);

        $data['slug']         = $data['slug'] ?: Str::slug($data['title']);
        $data['is_published'] = $request->boolean('is_published', false);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function edit(Post $post): View
    {
        $categories = Category::where('is_visible', true)->orderBy('sort_order')->get();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $data = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => "nullable|string|max:255|unique:posts,slug,{$post->id}",
            'excerpt'          => 'nullable|string|max:500',
            'content'          => 'nullable|string',
            'author'           => 'nullable|string|max:255',
            'category'         => 'nullable|string|max:255',
            'category_id'      => 'nullable|exists:categories,id',
            'featured_image'   => 'nullable|image|max:5120',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'og_image'         => 'nullable|string|max:255',
            'is_published'     => 'boolean',
        ]);

        $data['slug']         = $data['slug'] ?: Str::slug($data['title']);
        $data['is_published'] = $request->boolean('is_published', false);

        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($post->featured_image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($post->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post): RedirectResponse
    {
        if ($post->featured_image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($post->featured_image);
        }
        $post->delete();
        return redirect()->route('admin.posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}
