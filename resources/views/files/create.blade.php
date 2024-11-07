<!-- resources/views/files/create.blade.php -->
@extends('layouts.adm-main')

@section('content')
<div class="container">
    <br><br><br><br><br>
    <h1>Upload New File</h1>
    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">File Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <!-- Category Selection -->
        <div class="mb-3">
            <label for="category_id" class="form-label">Select Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="">Select a Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- File Upload -->
        <div class="mb-3">
            <label for="file" class="form-label">Choose File</label>
            <input type="file" name="file" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
