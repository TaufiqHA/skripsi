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
		@if($errors->any())
			<div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
			  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
			    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
			  </svg>
			  <span class="sr-only">Info</span>
			  <div class="ms-3 text-sm font-medium">
			  	{{ $errors->first() }}
			  </div>
			  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
			    <span class="sr-only">Close</span>
			    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
			      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
			    </svg>
			  </button>
			</div>
		@endif
		<section class="bg-white dark:bg-gray-900">
		  <div class="max-w-5xl px-4 py-8 mx-auto">
		      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Bimbingan</h2>
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
		      		<button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" type="button" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
	                  Setujui
	                </button>
	                <!-- modal start -->

					<!-- Main modal -->
					<div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
					    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
					        <!-- Modal content -->
					        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
					            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
					                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
					                <span class="sr-only">Close modal</span>
					            </button>
					            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
								    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.6-8.5h0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
								  </svg>
					            <p class="mb-4 text-gray-500 dark:text-gray-300">Apakah anda yakin untuk menyetujui judul ini?</p>
					            <div class="flex justify-center items-center space-x-4">
					                <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
					                    No, cancel
					                </button>
					                <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-900">
					                    Yes, I'm sure
					                </button>
					            </div>
					        </div>
					    </div>
					</div>


	                <!-- modal end -->
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