<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center mt-6 mb-2 mr-2 px-4 py-2 bg-red-500 dark:bg-red-500 border border-transparent rounded-md font-semibold text-lg text-white dark:text-gray-800 uppercase tracking-tight hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
