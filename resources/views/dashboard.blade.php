<x-app-layout>
   
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12 bg-gradient-to-b from-custom-600 from-40% to-custom-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-xl font-bold dark:text-gray-100 bg-custom-100">
                    {{ __("You're logged in! Welcome to Travel & Explore!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
