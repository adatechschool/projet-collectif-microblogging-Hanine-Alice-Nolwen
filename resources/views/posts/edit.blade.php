@extends('layouts.home')

@section('content')

<section class="text-[#222222]body-font overflow-hidden bg-gradient-to-b from-custom-600 from-40% to-custom-800">
    <div class="container px-5 py-24 mx-auto">

        <div class="lg:w-4/5 mx-auto flex flex-wrap bg-[#F2F2F2] rounded-lg">
            <img alt="blogpost_img" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{asset($blogpost->picture)}}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

                <form action="{{ route('blogpost.update', $blogpost->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="title">
                            Title
                        </label>
                        <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 w-10/12" type="text" name="title" id="title" value='{{$blogpost->title}}' />
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-bold text-gray-700" for="content">
                            Content
                        </label>
                        <textarea name="content" id="content" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm w-10/12 h-3/6" rows="" required>{{$blogpost->content}}</textarea>
                    </div>
                    <div class="flex mt-5">
                        <span class="title-font font-medium text-xl text-gray-900">by : {{$blogpost->user->pseudo}} </span>
                    </div>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <!-- <a href="" class="btn btn-outline-primary"> -->
                        <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                            Update </button>
                        <!-- </a> -->
                        <br><br>

                    </div>
                </form>
            </div>
        </div>
</section>

@endsection