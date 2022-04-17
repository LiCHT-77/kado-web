<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      ニュース作成
    </h2>
  </x-slot>

  <div class="py-12">
    <x-card class="mt-4">
      <x-news-form action="{{ route('admin.news.store') }}"></x-news-form>
    </x-card>
  </div>
</x-app-layout>
