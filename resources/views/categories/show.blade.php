@extends('layouts.adm-main')

@section('content')
<br><br><br><br><br>
<div class="categories">
    <div class="container">
        <h3>File Kategori</h3>
        
        @if ($category->parent)
            <a href="{{ route('categories.show', $category->parent->id) }}" class="btn btn-secondary mb-3">Back</a>
        @else
            <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-3">Back</a>
        @endif

        <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Create Kategori</a>
        <div class="row">
            <!-- Sidebar for Categories and Subcategories (on the left) -->
            <div class="col-md-3">
                <div class="sidebar">
                    <ul class="categories">
                        <!-- "All Categories" -->
                        <li class="{{ request('all') ? 'active' : '' }}">
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
                                @foreach ($topCategories as $categoryItem)  <!-- Ganti dengan 'topCategories' -->
                                    @include('categories.partials.category', ['category' => $categoryItem])
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Files Display Area (on the right) -->
            <div class="col-md-9 col-categories">
                <!-- Parent Category -->
                <h3>{{ $category->name }}</h3>
                <a href="{{ route('files.create') }}" class="btn btn-primary">Upload New File</a>

                <!-- Subcategories -->
                @if ($subcategories->isNotEmpty())
                    <div class="row">
                        @foreach ($subcategories as $subcategory)
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-body parent-card">
                                        <i class="bi bi-folder-fill"></i> <!-- Folder Icon -->
                                        <h5 class="card-title parent-title"><a href="{{ route('categories.show', $subcategory->id) }}">{{ $subcategory->name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                @endif

                <!-- Files -->
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
                    <p>No files available for this category.</p>
                @endif
            </div>



        </div>
    </div>
</div>
@endsection