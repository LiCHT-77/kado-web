<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      蔵書カテゴリ作成
    </h2>
  </x-slot>

  <div class="py-12">
    <x-card class="mt-4">
      <x-book-category-form action="{{ route('admin.book_categories.update', ['id' => $bookCategory->id]) }}"
        :bookCategory="$bookCategory">
        @method('PUT')
      </x-book-category-form>
    </x-card>
  </div>
</x-app-layout>
