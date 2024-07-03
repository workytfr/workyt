@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                {{ $fiche->title }}
            </h3>
            <p class="mt-1 text-gray-500 dark:text-neutral-400">
                {{ $fiche->description }}
            </p>
            <p class="mt-5 text-xs text-gray-500 dark:text-neutral-500">
                Last updated {{ $fiche->updated_at->diffForHumans() }}
            </p>
        </div>
        <embed src="{{ Storage::url($fiche->file_path) }}" width="100%" height="600">
    </div>
    <livewire:comment :fiche="$fiche" />
    <livewire:interaction :fiche="$fiche" />
</div>
@endsection
