@extends('layouts.dosen')

@section('container')
	<div class="w-full h-full" >
		@if(session()->get('success'))
			<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
			  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
			    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
			  </svg>
			  <span class="sr-only">Info</span>
			  <div class="ms-3 text-sm font-medium">
			    {{ session()->get('success') }}
			  </div>
			  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
			    <span class="sr-only">Close</span>
			    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
			      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
			    </svg>
			  </button>
			</div>
		@endif
		<section class="bg-white dark:bg-gray-900">
		  <div class="max-w-5xl px-4 py-8 mx-auto">
		      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update product</h2>
		      <form action=" {{ route('revisi', ['room' => $room->id]) }} " method="post">
		      	@csrf
		      	@method('put')
		      	<input type="hidden" name="room_id" value=" {{ $room->id }} ">
		      	<input type="hidden" name="tanggal_revisi" value=" {{ now() }} ">
		          <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
		              <div class="w-full">
		                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama mahasiswa</label>
		                  <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $room->mahasiswa->nama }} " placeholder="Type product name" required="" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
		                  <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $room->mahasiswa->nim }} " placeholder="Product brand" required="" readonly>
		              </div>
		              <div class="w-full">
			                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Draft tugas akhir</label>
							<a href=" {{ route('draft.download', ['room' => $room->id]) }} " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Download</a>
		              </div>
		              <div class="sm:col-span-2">
		                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Revisi</label>
						    <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
						        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
						           <label for="comment" class="sr-only">Revisi</label>
						           <textarea id="comment" name="revisi" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
						        </div>
						        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
						           <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
						              	Revisi
						            </button>
						        </div>
						   </div>
		              </div>
		          </div>
		      </form>
		      <div class="flex items-center space-x-4">
		      	<form action=" {{ route('room.aprove', ['room' => $room->id]) }} " method="post" >
		      		@csrf
		      		@method('put')
		      		<input type="hidden" name="tanggal_persetujuan" value=" {{ now() }} ">
		      		<input type="hidden" name="status" value="Disetujui">
		      		<button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
	                  Setujui
	                </button>
		      	</form>
	              <a href=" {{ route('dosen.bimbingan') }} " type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
	                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
					    <path d="M14.5 7H12v-.9a2.1 2.1 0 0 0-1.2-2 1.8 1.8 0 0 0-2 .4L3.8 9a2.2 2.2 0 0 0 0 3.2l5 4.5a1.8 1.8 0 0 0 2 .3 2.1 2.1 0 0 0 1.2-2v-.9h1a2 2 0 0 1 2 2V19a1 1 0 0 0 1.3 1 6.6 6.6 0 0 0-1.8-13Z"/>
					  </svg>
  						Kembali
	              </a>
	          </div>
		  </div>
		</section>
	</div>
@endsection