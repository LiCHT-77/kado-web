<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      蔵書編集
    </h2>
  </x-slot>

  <div class="py-12">
    <x-card class="mt-4">
      <x-validation-errors :errors="$errors"></x-validation-errors>
      <x-book-form action="{{ route('admin.books.update', ['id' => $book->id]) }}" :book="$book" :categories="$categories">
        @method('PUT')
      </x-book-form>
    </x-card>
  </div>
</x-app-layout>
