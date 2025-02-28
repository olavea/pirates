<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Job') }}
        </h2>
    </x-slot>

    <h2 class="font-bold text-2xl">{{ $job['title'] }}</h2>

    <p>
        {{ $job['salary'] }}
    </p class="mt-6">
    <x-primary-button href="/jobs/{{ $job['id'] }}/edit">Edit Your tale</x-primary-button>
</x-app-layout>