<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tall Tales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-emerald-400 dark:bg-emerald-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  text-gray-900 font-black dark:text-gray-100">
                    <div class="text-xl font-black py-3">
                        {{ __("") }}
                    </div>    
                    <div class="space-y-4">
                        @foreach ($jobs as $job)
                            
                                <a 
                                    href="/jobs/{{ $job['id'] }}" 
                                    class="text-xl font-black block px-4 py-6 border border-emerald-600 rounded-xl">
                                        {{ $job['title'] }}. 
                                </a>
                            
                        @endforeach    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
