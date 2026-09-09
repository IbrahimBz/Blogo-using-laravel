<x-layout>

    <div class="flex flex-col items-center justify-center w-full h-full gap-6">
        <h1 class="text-4xl font-bold text-center text-[#161615] dark:text-[#EDEDEC]">Welcome to Blogo</h1>
        <p class="text-lg text-center text-[#161615] dark:text-[#EDEDEC]">A simple blogging platform built with Laravel.</p>
        @foreach ($blogs as $blog)
            <div class="flex flex-col items-center justify-center gap-4">
                <h2 class="text-2xl font-bold text-center text-[#161615] dark:text-[#EDEDEC]">{{ $blog['title']}}</h2>
                <p class="text-lg text-center text-[#161615] dark:text-[#EDEDEC]">{{ $blog['content'] }}</p>
            </div>
        @endforeach
    </div>

</x-layout>