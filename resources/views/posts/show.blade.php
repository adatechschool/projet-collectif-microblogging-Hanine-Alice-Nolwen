@extends('layouts.home')

@section('content')

<section class="text-[#222222]body-font overflow-hidden bg-gradient-to-b from-custom-600 from-40% to-custom-800">
    <div class="container px-5 py-24 mx-auto">

        <div class="lg:w-4/5 mx-auto flex flex-wrap bg-[#F2F2F2] rounded-lg">
            <img alt="blogpost_img" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{asset($blogpost->picture)}}">

            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">Title</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$blogpost->title}}</h1>
                <p class="leading-relaxed">{{$blogpost->content}}</p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">

                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">by : {{$blogpost->user->pseudo}} </span>

                </div>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="/blogposts/{{ $blogpost->id }}/edit" class="btn btn-outline-primary">
                        <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Edit </button></a>
                    <br><br>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Delete</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection