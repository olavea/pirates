<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('A Tale') }}
        </h2>
    </x-slot>
    <br />
    <h2 class="mt-9 font-bold text-3xl">{{ $job['title'] }}</h2>

    <p class="mt-6">
        {{ $job['salary'] }}
    </p>
    <x-primary-button href="/jobs/{{ $job['id'] }}/edit">Edit Your tale</x-primary-button>
</x-app-layout>