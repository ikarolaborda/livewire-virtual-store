<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white ml-2 mr-2 mt-2 pb-2">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><a href="/categories/{{ $category->slug }}" class="{{ $category->depth === 0 ? 'font-bold' : '' }}">{{ $category->title }}</a></div>
        <p class="text-gray-700 text-base">{{ $category->children->count() }}</p>
    </div>
    <div class="px-6 pt-4 pb-2">
        @foreach($category->children as $subcategory)
            <x-category :category="$subcategory"/>
        @endforeach
    </div>
</div>
