<?php

// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
    
        // Fetch all files if 'all' is clicked, ensure it's a collection
        $files = collect();
        if ($request->query('all')) {
            $files = File::all();  // This is an Eloquent Collection
        }
    
        return view('categories.index', compact('categories', 'files'));
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
    

    public function show($id)
    {
        // Ambil kategori beserta subkategori dan file
        $category = Category::with(['children', 'files', 'parent'])->findOrFail($id);
    
        // Ambil kategori utama (parent-level) untuk navigasi
        $topCategories = Category::whereNull('parent_id')->get();
    
        // Kirim data ke view
        return view('categories.show', [
            'category' => $category,
            'subcategories' => $category->children, // Kirim subkategori
            'files' => $category->files,           // Kirim file
            'topCategories' => $topCategories,     // Kirim kategori utama
        ]);
    }
    

    public function showAllFiles()
    {
        // Fetch all files associated with any category
        $files = File::all(); // Assuming `File` is linked to a category

        // Retrieve all top-level categories to display in the sidebar
        $topCategories = Category::whereNull('parent_id')->with('children')->get();

        // Clear any active/open categories in the session
        session()->forget(['active_category', 'open_category']);

        // Return the view with the files and categories
        return view('categories.all', compact('files', 'topCategories'));
    }
    
}

