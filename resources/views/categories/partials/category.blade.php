<li>
    <a href="javascript:void(0);" class="toggle-category">
        <i class="bi bi-folder-fill"></i> {{ $category->name }}
    </a>

    @if ($category->children->isNotEmpty())
        <ul class="nested-categories" style="display: none;">
            @foreach ($category->children as $child)
                @include('categories.partials.category', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleLinks = document.querySelectorAll('.toggle-category');

        toggleLinks.forEach(link => {
            link.addEventListener('click', function () {
                const nestedCategories = this.nextElementSibling;

                if (nestedCategories) {
                    // Toggle display style between 'none' and 'block'
                    nestedCategories.style.display = nestedCategories.style.display === "none" ? "block" : "none";
                }
            });
        });
    });
</script>
