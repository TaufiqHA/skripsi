@extends('layouts.main')

@section('container')
@if(session()->get('success'))
	<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
	  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
	    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
	  </svg>
	  <span class="sr-only">Info</span>
	  <div class="ms-3 text-sm font-medium">
	    Pengajuan seminar proposal berhasil
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
@if($status === false)
	<div class="w-full h-full" >
		 <section class="bg-white dark:bg-gray-900">
		    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
		        <div class="mx-auto max-w-screen-sm text-center">
		            <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Akses ditolak</p>
		            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Judul belum disetujui dosen pembimbing</p>
		        </div>   
		    </div>
		</section>
	</div>
@else
	<div class="w-full h-full grid gap-4 lg:grid-cols-4" >
		<section class="bg-white h-fit dark:bg-gray-900 px-3 lg:col-span-2">
		  <div class="max-w-4xl px-4 py-8 mx-auto lg:py-16">
		      <h2 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Data diri</h2>
		      <p class="text-xs text-red-500 italic">Pastikan data diri telah benar</p>
		      <p class="text-xs text-red-500 italic mb-4">* untuk mengubah data diri silahkan menuju halaman profile</p>
		      <form action="#">
		          <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
		              <div class="sm:col-span-2">
		                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
		                  <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->nama }} " readonly>
		              </div>
		              <div class="w-full">
		                  <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
		                  <input type="text" name="nim" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->nim }} " placeholder="Product nim" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Angkatan</label>
		                  <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->angkatan }} " placeholder="$299" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
		                  <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->jurusan }} " placeholder="$299" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
		                  <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->fakultas }} " placeholder="$299" readonly>
		              </div>
		          </div>
		      </form>
		  </div>
		</section>
		<!-- section pengajuan seminar -->
		@if($statusPengajuan)
			 <section class="bg-white dark:bg-gray-900 lg:col-span-2">
			    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
			        <div class="mx-auto max-w-screen-sm text-center">
			            <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-2xl dark:text-white">Pengajuan seminar proposal berhasil</p>
			            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Harap cek status pengajuan secara berkala</p>
			        </div>   
			    </div>
			</section>
		@else
			<section class="bg-white dark:bg-gray-900 px-3 lg:col-span-2">
			  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
			      <h2 class="text-xl font-bold text-gray-900 dark:text-white">Pengajuan seminar proposal</h2>
			      <p class="text-xs text-red-500 italic mb-4">Pengajuan seminar proposal hanya dapat dilakukan 1 kali</p>
			      <form action=" {{ route('seminar.create') }} " method="post" enctype="multipart/form-data">
			      	@csrf
			          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
			              <div class="col-span-2">
			                  <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
			                  <textarea id="judul" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your judul here" readonly> {{ $judul->judul }} </textarea>
			              </div>
			              <div class="col-span-2" >
							<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="transkrip_nilai">Transkrip nilai</label>
							<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="transkrip_nilai_help" id="transkrip_nilai" type="file" name="transkrip_nilai">
							<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF (MAX 500kb).</p>
			              </div>
			              <div class="col-span-2" >
							<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="test_turnitin">Hasil test turnitin</label>
							<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="test_turnitin_help" id="test_turnitin" type="file" name="test_turnitin">
							<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF (MAX 500kb).</p>
			              </div>
			              <div class="col-span-2" >
							<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="katrol_seminar">Katrol seminar</label>
							<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="katrol_seminar_help" id="katrol_seminar" type="file" name="katrol_seminar">
							<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF (MAX 500kb).</p>
			              </div>
			              <div class="col-span-2" >
							<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="pengesahan">Lembar pengesahan</label>
							<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="pengesahan_help" id="pengesahan" type="file" name="pengesahan">
							<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF (MAX 500kb).</p>
			              </div>
			              <div class="col-span-2" >
							<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="draft">Draft proposal</label>
							<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="draft_help" id="draft" type="file" name="draft">
							<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF (MAX 500kb).</p>
			              </div>
			              <input type="hidden" name="jenis" value="Proposal">
			              <input type="hidden" name="mahasiswa_id" value=" {{ $mahasiswa->id }} ">
			          </div>
			          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
			              Ajukan seminar
			          </button>
			      </form>
			  </div>
			</section>
		@endif
		
	</div>
@endif
	
@endsection