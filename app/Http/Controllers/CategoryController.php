<?php

// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Only eager load children if files are not needed
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('categories.index', compact('categories'));
    }
    

    public function create()
    {
        // Fetch all categories, might be used for parent selection
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }    

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id', // Validate that parent_id is a valid category ID
        ]);
    
        // Create the category with parent_id
        Category::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id, // Save parent_id if provided
        ]);
    
        // Redirect to the categories list
        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }
    

    public function show(Category $category)
    {
        // Load the children and files for the selected category
        $category->load(['children', 'files']);
        
        // Load all categories for the sidebar (top-level categories)
        $categories = Category::with('children')->whereNull('parent_id')->get();
    
        // Pass both the categories and the selected category to the view
        return view('categories.show', compact('category', 'categories'));
    }
    
}

