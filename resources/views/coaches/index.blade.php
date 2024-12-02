@extends('layouts.base')

@section('content')
    <div class="flex items-start">
        <div class="py-8 mb-5 p-4">
            <a href="{{url('coaches/create')}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add Coach </a></div>
    </div>

<div class="flex flex-wrap justify-center mt-10">
    @foreach($coaches as $entity)
        <div class="p-4 max-w-sm">
            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-gray-600 p-8 flex-col items-center">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset($entity->image) }}" alt="{{$entity->name}}"/>
            <h5 class="mb-1 text-xl font-medium text-white">{{$entity->name}}</h5>
            <div class="flex mt-4 md:mt-6 justify-center">
                <a href="{{ url('coaches/'.$entity->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Edit</a>
                <form action="{{ url('coaches/'.$entity->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Delete</button>
            </div>
        </div>
    </div>
    

    @endforeach
</div>
@endsection

