@props(['news' => new App\Models\News()])
<form method="post" {{ $attributes->merge() }}>
  {{ $slot }}
  @csrf
  <input type="hidden" name="id" value="{{ $news->id }}">
  <label for="news-title">タイトル</label>
  <x-input type="text" name="title" id="news-title" class="block mt-1 w-full"
    value="{{ old('title', $news->title) }}" />

  <div class="flex items-center justify-end mt-4">
    @if (!is_null($news->id))
      <button type="submit" form="news-delete"
        class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-4 py-2 text-center ">
        削除
      </button>
    @endif
    <x-button class="ml-3">
      保存
    </x-button>
  </div>
</form>
@if (!is_null($news->id))
  <form action="{{ route('admin.news.delete', ['id' => $news->id]) }}" method="post" id="news-delete">
    @csrf
    @method('DELETE')
  </form>
@endif
