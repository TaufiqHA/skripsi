@extends('layouts.kajur')

@section('container')
	<div class="w-full h-full" >
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
		  <div class="max-w-5xl px-4 py-8 mx-auto lg:py-5">
		      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail Judul</h2>
		      <form action=" {{ route('judul.aprove', ['judul' => $judul->id]) }} " method="post" >
		      	@csrf
		      	<input type="hidden" name="judul_id" value=" {{ $judul->id }} ">
		      	<input type="hidden" name="tanggal_disetujui" value=" {{ now() }} " >
		          <div class="grid gap-4 mb-4 sm:grid-cols-4 sm:gap-6 sm:mb-5">
		              <div class="sm:col-span-3">
						<label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
						<textarea id="judul" name="judul" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="type here" readonly> {{ $judul->judul }} </textarea>
		              </div>
		              <div class="w-full">
	                    <label for="konsentrasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konsentrasi</label>
						<textarea id="konsentrasi" name="konsentrasi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="type here" readonly> {{ $judul->konsentrasi }} </textarea>
		              </div>
		              <div class="w-full">
		                  <label for="metode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode analisis yang digunakan</label>
		                  <input type="text" name="metode" id="metode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->metode }} " placeholder="type here" readonly>
		              </div>
		              <div>
		                  <label for="teknik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teknik pengumpulan data</label>
		                  <input type="text" name="teknik" id="teknik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->teknik }} " placeholder="type here" readonly>
		              </div>
		              <div>
		                  <label for="bentuk_data" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bentuk data</label>
		                  <input type="text" name="bentuk_data" id="bentuk_data" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->bentuk_data }} " placeholder="type here" readonly>
		              </div>
		              <div>
		                  <label for="tempat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat pengumpulan data</label>
		                  <input type="text" name="tempat" id="tempat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->tempat }} " placeholder="type here" readonly>
		              </div>
		              <div>
		              	<div class="flex justify-between items-center mb-2 " >
		              		<label for="nama_dosen1" class="block text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 1</label>
		              		<button id="dropdownToggleButton" data-dropdown-toggle="dropdownToggle" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
								<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
									<path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
								</svg>
							</button>
							<div id="dropdownToggle" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-72 dark:bg-gray-700 dark:divide-gray-600">
							    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownToggleButton">
							      <li>
							        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
							          <label class="relative inline-flex items-center w-full cursor-pointer">
							            <input type="checkbox" value="" class="sr-only peer" id="toggleButton">
							            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
							            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pembimbing 1</span>
							          </label>
							        </div>
							      </li>
							      <li>
							        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
							          <label class="relative inline-flex items-center w-full cursor-pointer">
							            <input type="checkbox" class="sr-only peer" id="toggleButton1">
							            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
							            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pembimbing 2</span>
							          </label>
							        </div>
							      </li>
							    </ul>
							</div>
		              	</div>
		                <input type="text" name="nama_dosen1" id="nama_dosen1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->dosen_pembimbing1->nama }} " placeholder="type here" readonly>
		                <input type="hidden" name="" id="additionalInput" value="{{ $judul->dosen_pembimbing1->id }}">
		              </div>
		              <div>
		              	<div class="flex justify-between items-center mb-2 " >
		              		<label for="nama_dosen2" class="block text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 2</label>
		              		<button id="dropdownToggle2Button" data-dropdown-toggle="dropdownToggle2" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
								<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
									<path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
								</svg>
							</button>
							<div id="dropdownToggle2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-72 dark:bg-gray-700 dark:divide-gray-600">
							    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownToggle2Button">
							      <li>
							        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
							          <label class="relative inline-flex items-center w-full cursor-pointer">
							            <input type="checkbox" value="" class="sr-only peer" id="toggleButton2">
							            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
							            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pembinmbing 1</span>
							          </label>
							        </div>
							      </li>
							      <li>
							        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
							          <label class="relative inline-flex items-center w-full cursor-pointer">
							            <input type="checkbox" value="" class="sr-only peer" id="toggleButton3">
							            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
							            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pembimbing 2</span>
							          </label>
							        </div>
							      </li>
							    </ul>
							</div>
		              	</div>
		                <input type="text" name="nama_dosen2" id="nama_dosen2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->dosen_pembimbing2->nama }} " placeholder="type here" readonly>
		                <input type="hidden" name="" id="additionalInput1" value="{{ $judul->nama_dosen2 }}">
		              </div>
		              <div>
		                 <div class="flex justify-between items-center mb-2 " >
		              		<label for="nama_dosen3" class="block text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 3</label>
		              		<button id="dropdownToggle3Button" data-dropdown-toggle="dropdownToggle3" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
								<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
									<path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
								</svg>
							</button>
							<div id="dropdownToggle3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-72 dark:bg-gray-700 dark:divide-gray-600">
							    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownToggle3Button">
							      <li>
							        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
							          <label class="relative inline-flex items-center w-full cursor-pointer">
							            <input type="checkbox" value="" class="sr-only peer" id="toggleButton4">
							            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
							            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pembinmbing 1</span>
							          </label>
							        </div>
							      </li>
							      <li>
							        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
							          <label class="relative inline-flex items-center w-full cursor-pointer">
							            <input type="checkbox" value="" class="sr-only peer" id="toggleButton5">
							            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
							            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pembimbing 2</span>
							          </label>
							        </div>
							      </li>
							    </ul>
							</div>
		              	</div>
		                <input type="text" name="nama_dosen3" id="nama_dosen3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->dosen_pembimbing3->nama }} " placeholder="type here" readonly>
		                <input type="hidden" name="" id="additionalInput2" value="{{ $judul->nama_dosen3 }}">
		              </div>
		              <div>
		                <div class="flex justify-between items-center mb-2 " >
		              		<label for="nama_dosen4" class="block text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 4</label>
		              		<button id="dropdownToggle4Button" data-dropdown-toggle="dropdownToggle4" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
								<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
									<path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
								</svg>
							</button>
							<div id="dropdownToggle4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-72 dark:bg-gray-700 dark:divide-gray-600">
							    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownToggle4Button">
							      <li>
							        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
							          <label class="relative inline-flex items-center w-full cursor-pointer">
							            <input type="checkbox" value="" class="sr-only peer" id="toggleButton6">
							            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
							            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pembinmbing 1</span>
							          </label>
							        </div>
							      </li>
							      <li>
							        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
							          <label class="relative inline-flex items-center w-full cursor-pointer">
							            <input type="checkbox" value="" class="sr-only peer" id="toggleButton7">
							            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
							            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pembimbing 2</span>
							          </label>
							        </div>
							      </li>
							    </ul>
							</div>
		              	</div>
		                <input type="text" name="nama_dosen4" id="nama_dosen4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->dosen_pembimbing4->nama }} " placeholder="type here" readonly>
		                <input type="hidden" name="" id="additionalInput3" value="{{ $judul->nama_dosen4 }}">
		              </div>
		          </div>
		          <div class="flex items-center space-x-4">
		              <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
		                  Terima
		              </button>
		              <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
		                  <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
		                  Tolak
		              </button>
		          </div>
		      </form>
		  </div>
		</section>
	</div>
@endsection

@section('modal')
	<!-- Main modal -->
	<div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
	    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
	        <!-- Modal content -->
	        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
	            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
	                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
	                <span class="sr-only">Close modal</span>
	            </button>
	            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
	            <form action=" {{ route('judul.tolak', ['judul' => $judul->id]) }} " >
					<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan penolakan</label>
					<textarea id="message" rows="4" class="block my-3 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="type here" name="alasan_penolakan" ></textarea>

		            <div class="flex justify-center items-center space-x-4">
		                <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
		                    No, cancel
		                </button>
		                <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
		                    Yes, I'm sure
		                </button>
		            </div>
	        	</form>
	        </div>
	    </div>
	</div>
@endsection

@section('script')
	<script>
        const toggleButton = document.getElementById('toggleButton');
        const toggleButton1 = document.getElementById('toggleButton1');
        const additionalInput = document.getElementById('additionalInput');

        toggleButton.addEventListener('change', function() {
            if (this.checked) {
                additionalInput.name = 'dospem1_id'
            }
        });

        toggleButton1.addEventListener('change', function() {
            if (this.checked) {
                additionalInput.name = 'dospem2_id'
            }
        });

        // toggle 3
        const toggleButton2 = document.getElementById('toggleButton2');
        const toggleButton3 = document.getElementById('toggleButton3');
        const additionalInput1 = document.getElementById('additionalInput1');

        toggleButton2.addEventListener('change', function() {
            if (this.checked) {
                additionalInput1.name = 'dospem1_id'
            }
        });

        toggleButton3.addEventListener('change', function() {
            if (this.checked) {
                additionalInput1.name = 'dospem2_id'
            }
        });

        // toggle 5
        const toggleButton4 = document.getElementById('toggleButton4');
        const toggleButton5 = document.getElementById('toggleButton5');
        const additionalInput2 = document.getElementById('additionalInput2');

        toggleButton4.addEventListener('change', function() {
            if (this.checked) {
                additionalInput2.name = 'dospem1_id'
            }
        });

        toggleButton5.addEventListener('change', function() {
            if (this.checked) {
                additionalInput2.name = 'dospem2_id'
            }
        });

        // toggle 7
        const toggleButton6 = document.getElementById('toggleButton6');
        const toggleButton7 = document.getElementById('toggleButton7');
        const additionalInput3 = document.getElementById('additionalInput3');

        toggleButton6.addEventListener('change', function() {
            if (this.checked) {
                additionalInput3.name = 'dospem1_id'
            }
        });

        toggleButton7.addEventListener('change', function() {
            if (this.checked) {
                additionalInput3.name = 'dospem2_id'
            }
        });
    </script>
@endsection