<title>Products</title>
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Добавить товар') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">Добавить товар</h2>
        <form method="post" 
              class="forms text-center forms-fields-width" 
              accept="image/*" 
              action="/products/edit">
          @csrf
          <input type="file" name="image" id="image" class="form-control">
          <input type="text" name="name" id="name" placeholder="Введите название товара" class="form-control">
          <input type="text" name="price" id="price" placeholder="Введите цену" class="form-control">
          <button type="submit" class="btn btn-success">Добавить</button>
        </form>
      </div>
    </div>
</x-app-layout>