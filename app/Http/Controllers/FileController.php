<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Show the form for creating a new file.
     */
    public function create()
    {
        // Get all categories to show in the dropdown for associating with a file
        $categories = Category::all();
        return view('files.create', compact('categories'));
    }

    /**
     * Store a newly uploaded file in storage and associate it with a category.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',          // Validate the file title
            'category_id' => 'required|exists:categories,id', // Validate category ID
            'file' => 'required|file|mimes:jpg,png,pdf,docx|max:2048', // Validate file type and size
        ]);

        // Store the file and get its path
        $path = $request->file('file')->store('files');

        // Create a new File record and associate it with the selected category
        File::create([
            'name' => $request->title,                    // Use the provided title as the file name
            'size' => $request->file('file')->getSize(),  // Get file size in bytes
            'hits' => 0,                                  // Initialize download or access count
            'date_added' => now(),                        // Set the current timestamp for date added
            'date_modified' => now(),                     // Set the current timestamp for date modified
            'category_id' => $request->category_id,       // Associate with selected category
            'path' => $path,                              // Store the file path for later access
        ]);

        // Redirect to the categories index page with a success message
        return redirect()->route('categories.index')->with('success', 'File uploaded successfully!');
    }

    public function download($id)
    {
        $file = File::findOrFail($id);
        return Storage::download($file->path, $file->name);
    }
    
}
