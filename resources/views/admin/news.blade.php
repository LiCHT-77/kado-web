<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      ニュース
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <h3>ニュース一覧</h3>
          <div>
            <ul>
              @foreach ($news as $content)
                <x-news-item :news="$content" href="{{ route('admin.news.edit', ['id' => $content->id]) }}"></x-news-item>
              @endforeach
            </ul>
          </div>
          <div class="flex items-center justify-end mt-4">
            <a href="{{ route('admin.news.create') }}"
              class="border-transparent font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
              新規作成 +
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
