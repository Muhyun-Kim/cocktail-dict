<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("ログインできました!") }}
                </div>
            </div>
            <div class="flex justify-end m-2">
                <button class="bg-white p-1 shadow-sm sm:rounded-lg font-semibold">
                        <a href="{{ url('/') }}">
                            ホーム
                        </a>
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
