<title>Кабинет администратора</title>
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-white">
            {{ __('Панель управления') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 bg-blue-dark text-white">
                    <a href="/admin/products">
                        <button type="button" id="register-btn" class="btn btn-warning me-2">Добавить продукт</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>