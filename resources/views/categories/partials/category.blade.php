<div class="categories">
    <li class="{{ session('active_category') == $category->id ? 'active' : '' }}">
        @if ($category->children->isNotEmpty())
            <!-- Category with Subcategories -->

            <!-- Toggle Checkbox -->
            <input type="checkbox" id="toggle-{{ $category->id }}" class="toggle"
                   {{ session('open_category') == $category->id ? 'checked' : '' }} />

            <!-- Label for Toggle Icon (Folder Icon + Arrow Icon for Categories with Children) -->
            <label for="toggle-{{ $category->id }}" class="category-toggle">
                <span>
                <i class="bi bi-chevron-down arrow {{ session('open_category') == $category->id ? 'rotate' : '' }}"></i>
                <!-- Arrow Icon for Expandable Categories -->
                    <i class="bi bi-folder-fill"></i> <!-- Folder Icon -->
                </span>
            </label>

            <!-- Category Link -->
            <a href="{{ route('categories.show', $category->id) }}" class="category-label">
                {{ $category->name }}
            </a>

            <!-- Nested Categories -->
            <ul class="nested-categories {{ session('open_category') == $category->id ? 'show' : '' }}">
                @foreach ($category->children as $child)
                    @include('categories.partials.category', ['category' => $child])
                @endforeach
            </ul>

        @else
            <!-- Category without Subcategories -->
            <label class="category-toggle">
                <span>
                    <i class="bi bi-folder-fill"></i> <!-- Folder Icon -->
                </span>
            </label>
            <a href="{{ route('categories.show', $category->id) }}" class="category-label">
                {{ $category->name }}
            </a>
        @endif
    </li>
</div>
