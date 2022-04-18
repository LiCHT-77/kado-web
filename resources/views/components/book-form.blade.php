@props(['book' => new App\Models\Book(), 'categories' => []])
<form method="post" {{ $attributes->merge() }}>
  {{ $slot }}
  @csrf
  <input type="hidden" name="id" value="{{ $book->id }}">
  <div>
    <label for="name">書籍名</label>
    <x-input type="text" name="name" id="name" class="block mt-1 w-full" value="{{ old('name', $book->name) }}" />
  </div>

  <div class="mt-4">
    <label for="reference_number">整理番号</label>
    <x-input type="text" name="reference_number" id="reference_number" class="block mt-1 w-full"
      value="{{ old('reference_number', $book->reference_number) }}" />
  </div>

  <div class="mt-4">
    <label for="author">著者</label>
    <x-input type="text" name="author" id="author" class="block mt-1 w-full"
      value="{{ old('author', $book->author) }}" />
  </div>

  <div class="mt-4">
    <label for="publisher">出版社</label>
    <x-input type="text" name="publisher" id="publisher" class="block mt-1 w-full"
      value="{{ old('publisher', $book->publisher) }}" />
  </div>

  <div class="mt-4">
    <label for="description">説明</label>
    <x-input type="text" name="description" id="description" class="block mt-1 w-full"
      value="{{ old('description', $book->description) }}" />
  </div>

  <div class="mt-4">
    <label for="description">カテゴリ</label>
    <select name="book_category_id">
      <option value="">未指定</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}" @if ($book->book_category_id == $category->id) selected @endif>
          {{ $category->name }}
        </option>
      @endforeach
    </select>
  </div>

  <div class="flex items-center justify-end mt-4">
    @if (!is_null($book->id))
      <button type="submit" form="book-delete"
        class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-4 py-2 text-center ">
        削除
      </button>
    @endif
    <x-button class="ml-3">
      保存
    </x-button>
  </div>
</form>
@if (!is_null($book->id))
  <form action="{{ route('admin.books.delete', ['id' => $book->id]) }}" method="post" id="book-delete">
    @csrf
    @method('DELETE')
  </form>
@endif
