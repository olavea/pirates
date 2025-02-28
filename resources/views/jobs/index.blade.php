<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Aboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-black dark:text-gray-100">
                    {{ __("Tall Tales Uncensored") }}
                    <ul>
                        @foreach ($jobs as $job)
                            <li class="hover:underline ">
                                <a href="/jobs/{{ $job['id'] }}">
                                    {{ $job['title'] }}. 
                                </a>
                            </li>
                        @endforeach    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
