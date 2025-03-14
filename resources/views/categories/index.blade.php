@extends('layouts.adm-main')

@section('content')
<br><br><br><br><br>
<div class="categories">
    <div class="container">
        <h3>File Kategori</h3>
        <!-- Create Category Button -->
        <a href="{{ route('categories.create') }}" class="btn btn-success">Add New Category</a>
        
        <!-- Create File Button -->
        <a href="{{ route('files.create') }}" class="btn btn-primary">Upload New File</a>

        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <ul class="categories">
                        <!-- "All Categories" -->
                        <li>
                            <input type="checkbox" id="toggle-all-categories" class="toggle" 
                                {{ request('all') ? 'checked' : '' }} />
                            <label for="toggle-all-categories" class="category-toggle">
                                <span>
                                    <i class="bi bi-chevron-down arrow"></i> <!-- Arrow for toggling -->
                                    <i class="bi bi-folder-fill"></i> <!-- Folder Icon -->
                                </span>
                            </label>
                            <a href="{{ route('categories.index', ['all' => true]) }}" class="category-label">
                                All Categories
                            </a>
        
                            <!-- Nested Categories -->
                            <ul class="nested-categories">
                                @foreach ($categories as $category)
                                    @include('categories.partials.category', ['category' => $category])
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-categories">
                @if ($files->isNotEmpty())
                    <div class="row">
                        @foreach ($files as $file)
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $file->name }}</h5>
                                        <p>Type: {{ strtoupper(pathinfo($file->name, PATHINFO_EXTENSION)) }} | Size: {{ number_format($file->size / 1024, 2) }} KB</p>
                                        <p><strong>Hits:</strong> {{ $file->hits }}</p>
                                        <p><strong>Date added:</strong> {{ $file->date_added }}</p>
                                        <p><strong>Date modified:</strong> {{ $file->date_modified }}</p>
                                        <a href="{{ route('files.download', $file->id) }}" class="btn btn-primary">Download</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No files available for "All Categories".</p>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection
