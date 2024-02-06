@extends('layouts.main')

@section('container')
	<div class="w-full h-full flex flex-col gap-5 md:flex-row " >
		@foreach($rooms as $key => $room)
			<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
			    <div class="flex flex-col items-center py-10">
			        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src=" {{ asset('img/user1.png') }} " alt="Bonnie image"/>
			        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"> {{ $room->dosen->nama }} </h5>
			        <span class="text-sm text-gray-500 dark:text-gray-400"> {{ 'Dosen pembimbing ' . $key + 1 }} </span>
			        <div class="flex mt-4 md:mt-6">
			            <a href=" {{ route('bimbingan.room', ['room' => $room->id]) }} " class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enter</a>
			            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Revisi</a>
			        </div>
			    </div>
			</div>
		@endforeach
	</div>
@endsection