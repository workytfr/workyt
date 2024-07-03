<div class="container mx-auto py-8 px-4">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="grid gap-6 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 p-4">
            @foreach ($fiches as $fiche)
                <div class="bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div class="p-4 md:p-5">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            {{ $fiche->title }}
                        </h3>
                        <p class="mt-1 text-gray-500 dark:text-neutral-400">
                            {{ Str::limit($fiche->description, 150) }}
                        </p>
                        <p class="mt-5 text-xs text-gray-500 dark:text-neutral-500">
                            {{ \Carbon\Carbon::parse($fiche->created_at)->isoFormat('DD MMMM YYYY') }}
                        </p>
                    </div>
                    <img class="w-full h-auto rounded-b-xl" src="{{ asset('storage/' . $fiche->thumbnail_path) }}" alt="Fiche Thumbnail">
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-6">
            {{ $fiches->links() }}
        </div>
    </div>
</div>
