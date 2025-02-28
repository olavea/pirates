<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Tale') }}
        </h2>
    </x-slot>

    <form method="POST" action="/jobs">
        @csrf 
        <div class="space-y-12">

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Tell Your Tale</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm/6 font-bold text-gray-900">Title</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="Dev" >
                                </div>
                                @error('title')
                                    <p class="text-red-500 font-bold">{{ $message }}</p>
                                @enderror
                            </div>
                    
                        <div class="sm:col-span-4 mt-6">
                            <label for="salary" class="block text-sm/6 font-bold text-gray-900">Salary</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="1 million $" >
                                </div>
                                @error('salary')
                                    <p class="text-red-500 font-bold">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                </div>
                </div>



                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-xl bg-gradient-to-b from-yellow-300 to-orange-500 px-3 py-2 text-5xl font-bold text-white shadow-sm hover:bg-gradient-to-b hover:from-yellow-400 hover:to-orange-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            

        </div>
        
    </form>    
</x-app-layout>
