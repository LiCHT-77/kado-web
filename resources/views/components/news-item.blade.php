@props(['news'])
<a
  {{ $attributes->merge(['class' =>'block w-full px-4 py-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700']) }}>
  <div class="flex justify-content-start">
    <div>
      {{ $news->title }}
    </div>
    <div class="ml-auto flex">
      <span>
        {{ $news->created_at }}
      </span>
    </div>
  </div>
</a>
