@extends('layouts.home')

@section('content')

<div class="grid grid-cols-3 gap-16 px-16 py-16">
    @forelse($blogposts as $blogpost)
        <a href="/blogposts/{{ $blogpost->id }}" class="grid grid-rows-3 overflow-hidden items-center bg-[#F2F2F2] rounded-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 hover:scale-105 duration-500" style="min-height: 450px; display: flex; flex-direction: column;">
            <img class="flex object-cover rounded-lg p-4" src="{{$blogpost->picture}}" alt="">
            <div class="flex flex-col p-4 justify-between leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#222222] dark:text-white">{{$blogpost->title}}</h5>
                <p class="mb-3 font-normal text-[#222222] dark:text-gray-400">{{ \Illuminate\Support\Str::words($blogpost->content, 7, '...')}}</p>
            </div>
        </a>
@empty
        <p>No posts found</p>
@endforelse
</div>


@endsection