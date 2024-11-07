@extends('layouts.adm-main')

@section('content')
<br><br><br><br><br>
<div class="categories">
    <div class="container">
        <div class="row">
            <!-- Sidebar for Categories and Subcategories -->
            <div class="col-lg-3 col-md-4 col-sm-12 col-12 mb-3 sidebar-wrapper">
                <h3>File Kategori</h3>

                <!-- Back Button -->
                <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-3">Back</a>

                <!-- Create New Category Button -->
                <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Create Kategori</a>

                <!-- Sidebar Categories -->
                <div class="sidebar">
                    <ul class="categories">
                        @foreach ($categories as $categoryItem)
                            @include('categories.partials.category', ['category' => $categoryItem])
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Files Display Area -->
            <div class="col-lg-9 col-md-8 col-sm-12 col-12 content-wrapper">
                @if(isset($category))
                    <h3>Files in "{{ $category->name }}"</h3>

                    <!-- Button to upload a new file -->
                    <a href="{{ route('files.create') }}" class="btn btn-primary mb-3">Upload New File</a>

                    @forelse ($category->files as $file)
                        <div class="card mb-3 file-card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $file->name }}</h5>
                                <p>Type: {{ strtoupper(pathinfo($file->name, PATHINFO_EXTENSION)) }} | Size: {{ number_format($file->size / 1024, 2) }} KB</p>
                                <p><strong>Hits:</strong> {{ $file->hits }}</p>
                                <p><strong>Date added:</strong> {{ $file->date_added }}</p>
                                <p><strong>Date modified:</strong> {{ $file->date_modified }}</p>
                                <a href="{{ route('files.download', $file->id) }}" class="btn btn-primary">Download</a>
                            </div>
                        </div>
                    @empty
                        <p>No files available in this category.</p>
                    @endforelse
                @else
                    <p>Select a category to see the files.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
