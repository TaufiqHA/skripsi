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
		      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Data diri</h2>
		      <form action=" {{ route('dosen.update', ['dosen' => auth()->user()->dosen->id]) }} " method="post" >
		      	@csrf
		      	@method('put')
		          <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
		              <div class="sm:col-span-2">
		                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama lengkap</label>
		                  <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->nama }} " placeholder="Type product name" required="">
		              </div>
		              <div class="w-full">
		                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
		                  <input type="text" name="nip" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->nip }} " placeholder="Product brand" required="">
		              </div>
		              <div class="w-full">
		                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
		                  <input type="text" name="jabatan" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->jabatan }} " placeholder="$299" required="">
		              </div>
		              <div>
		                  <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori pegawai</label>
		                  <input type="text" name="kategori" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->kategori }} " placeholder="Ex. 12" required="">
		              </div>
		              <div>
		                  <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status kepegawaian</label>
		                  <input type="text" name="status" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->status }} " placeholder="Ex. 12" required="">
		              </div>
		          </div>
		          <div class="flex items-center space-x-4">
		              <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
		                  Save
		              </button>
		          </div>
		      </form>
		  </div>
		</section>
	</div>
@endsection