@extends('layouts.main')

@section('container')
	<div class="w-full h-full flex flex-col gap-5 md:flex-row " >
		@foreach($rooms as $key => $room)
			<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
			    <div class="flex flex-col items-center py-10">
			        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src=" {{ asset('img/user1.png') }} " alt="Bonnie image"/>
			        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"> {{ $room->dosen->nama }} </h5>
			        <span class="text-sm text-gray-500 dark:text-gray-400"> {{ 'Dosen pembimbing ' . $key + 1 }} </span>
			        <span class="text-sm text-gray-500 dark:text-gray-400"> {{ $room->status }} </span>
			        <div class="flex gap-3 mt-4 md:mt-6">
			            <a href=" {{ route('bimbingan.room', ['room' => $room->id]) }} " class=" {{ $room->status === 'Disetujui' ? 'hidden' : '' }} inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enter</a>
			            <button data-modal-target="timeline-modal{{ $room->id }}" data-modal-toggle="timeline-modal{{ $room->id }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Revisi</button>
						<!-- Main modal -->
						<div id="timeline-modal{{ $room->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
						    <div class="relative p-4 w-full max-w-md max-h-full">
						        <!-- Modal content -->
						        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
					                <!-- Modal header -->
					                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
					                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
					                        Revisi
					                    </h3>
					                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="timeline-modal{{ $room->id }}">
					                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
					                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
					                        </svg>
					                        <span class="sr-only">Close modal</span>
					                    </button>
					                </div>
					                <!-- Modal body -->
					                <div class="p-4 md:p-5">
					                    <ol class="relative border-s border-gray-200 dark:border-gray-600 ms-3.5 mb-4 md:mb-5">
						                    @foreach($room->revisi as $revisi)              
						                    	<li class="mb-10 ms-8">            
						                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white dark:ring-gray-700 dark:bg-gray-600">
						                                <svg class="w-2.5 h-2.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
						                            </span>
						                            <h3 class="flex items-start mb-1 text-md font-semibold text-gray-900 dark:text-white"> {{ $revisi->revisi }} </h3>
						                            <time class="block mb-3 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Released on {{ $revisi->tanggal_revisi }} </time>
						                        </li>
						                    @endforeach
					                    </ol>
					                </div>
					            </div>
						    </div>
						</div>
			        </div>
			    </div>
			</div>
		@endforeach
	</div>
@endsection