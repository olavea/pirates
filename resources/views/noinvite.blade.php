<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('noinvite') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-black text-3xl p-6 text-gray-900 dark:text-gray-100">
                <div class="object-center font-black text-9xl p-6 text-gray-900 dark:text-gray-100">🫖</div>
                    {{ __("You're Invite Code is a teapot 418! ") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">Don't try again, go read about</div> 
                    <a class="p-6 text-gray-900 dark:text-gray-100" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/418">The HTTP Status "418" on MDN web docs.</a> 
            </div>
        </div>
    </div>
</x-guest-layout>
