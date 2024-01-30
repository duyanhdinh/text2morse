<x-layouts.layout :title="$title">
    <x-banner/>

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @if (Route::has('login'))
            @auth
                @livewire('navigation-menu')
            @else
                <div class="sm:top-0 sm:right-0 h-[8vh] min-h-[64px] relative w-full p-6 text-right z-10">
                    <a href="{{ route('login') }}"
                       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                </div>
            @endauth
        @endif

        <!-- Page Content -->
        <main class="w-full h-[92vh] flex justify-center">
            <div class="w-[1080px]">
                {{ $slot }}
            </div>
        </main>
    </div>
</x-layouts.layout>
