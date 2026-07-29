<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::orderBy('sort_order')->paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'slug'        => 'nullable|string|max:255|unique:categories,slug',
            'description' => 'nullable|string|max:1000',
            'color'       => 'nullable|string|max:20',
            'is_visible'  => 'boolean',
            'sort_order'  => 'nullable|integer|min:0',
        ]);

        $data['slug']       = $data['slug'] ?: Str::slug($data['name']);
        $data['is_visible'] = $request->boolean('is_visible', true);

        Category::create($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'slug'        => "nullable|string|max:255|unique:categories,slug,{$category->id}",
            'description' => 'nullable|string|max:1000',
            'color'       => 'nullable|string|max:20',
            'is_visible'  => 'boolean',
            'sort_order'  => 'nullable|integer|min:0',
        ]);

        $data['slug']       = $data['slug'] ?: Str::slug($data['name']);
        $data['is_visible'] = $request->boolean('is_visible', false);

        $category->update($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
