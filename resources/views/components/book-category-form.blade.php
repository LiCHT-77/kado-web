@props(['bookCategory' => new App\Models\BookCategory()])
<form method="post" {{ $attributes->merge() }}>
  {{ $slot }}
  @csrf
  <input type="hidden" name="id" value="{{ $bookCategory->id }}">
  <div>
    <label for="category-name">カテゴリ名</label>
    <x-input type="text" name="name" id="category-name" class="block mt-1 w-full"
      value="{{ old('name', $bookCategory->name) }}" />
  </div>

  <div class="mt-4">
    <label for="category-description">説明</label>
    <x-input type="text" name="description" id="category-description" class="block mt-1 w-full"
      value="{{ old('description', $bookCategory->description) }}" />
  </div>

  <div class="flex items-center justify-end mt-4">
    @if (!is_null($bookCategory->id))
      <button type="submit" form="book-category-delete"
        class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-4 py-2 text-center ">
        削除
      </button>
    @endif
    <x-button class="ml-3">
      保存
    </x-button>
  </div>
</form>
@if (!is_null($bookCategory->id))
  <form action="{{ route('admin.book_categories.delete', ['id' => $bookCategory->id]) }}" method="post"
    id="book-category-delete">
    @csrf
    @method('DELETE')
  </form>
@endif
