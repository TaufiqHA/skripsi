@extends('layouts.kajur')

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
		<section class="bg-gray-50 dark:bg-gray-900 sm:p-5">
		    <div class="mx-auto max-w-screen-5xl px-1 lg:px-12">
		        <!-- Start coding here -->
		        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
		            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
		                <div class="w-full md:w-1/2">
		                    <form action=" {{ route('judul.search') }} " method="GET" class="flex items-center">
		                        <label for="simple-search" class="sr-only">Search</label>
		                        <div class="relative w-full">
		                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
		                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
		                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
		                                </svg>
		                            </div>
		                            <input type="search" name="search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
		                            <button type="submit" class="hidden"></button>
		                        </div>
		                    </form>
		                </div>
		                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
		                    <div class="flex items-center space-x-3 w-full md:w-auto">
		                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
		                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
		                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
		                            </svg>
		                            Actions
		                        </button>
		                        <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
		                            <ul class="py-1 text-sm text-gray-900 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
		                                <li>
		                                    <a href=" {{ route('judul.search', ['search' => 'Diajukan']) }} " class="block py-2 px-4 text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Diajukan</a>
		                                </li>
		                                <li>
		                                    <a href=" {{ route('judul.search', ['search' => 'Diterima']) }} " class="block py-2 px-4 text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Diterima</a>
		                                </li>
		                                <li>
		                                    <a href=" {{ route('judul.search', ['search' => 'Ditolak']) }} " class="block py-2 px-4 text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ditolak</a>
		                                </li>
		                                <li>
		                                    <a href=" {{ route('kajur.judul') }} " class="block py-2 px-4 text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semua</a>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="overflow-x-auto">
		                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
		                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
		                        <tr>
		                            <th scope="col" class="px-4 py-3 capitalize">Nama</th>
		                            <th scope="col" class="px-4 py-3 capitalize">Judul</th>
		                            <th scope="col" class="px-4 py-3 capitalize">Tanggal Pengajuan</th>
		                            <th scope="col" class="px-4 py-3 capitalize">Status</th>
		                            <th scope="col" class="px-4 py-3">
		                                <span class="sr-only">Actions</span>
		                            </th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($juduls as $judul)
		                    		<tr class="border-b dark:border-gray-700">
			                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ $judul->mahasiswa->nama }} </th>
			                            <td class="px-4 py-3 text-wrap "> {{ $judul->judul }} </td>
			                            <td class="px-4 py-3"> {{ $judul->tanggal_pengajuan }} </td>
			                            <td class="px-4 py-3"> {{ $judul->status }} </td>
			                            <td class="px-4 py-3 flex items-center justify-end">
			                            	@if($judul->status === 'Diajukan')
											    <button id="updateProductButton" data-modal-target="updateProductModal0" data-modal-toggle="updateProductModal0" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
				                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
				                                    </svg>
				                                </button>

												<!-- Main modal -->
												<div id="updateProductModal0" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
												    <div class="relative p-4 w-full max-w-6xl h-full md:h-auto">
												        <!-- Modal content -->
												        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
												            <!-- Modal header -->
												            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
												                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
												                    Detail judul
												                </h3>
												                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal0">
												                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
												                    <span class="sr-only">Close modal</span>
												                </button>
												            </div>
												            <!-- Modal body -->
												            <section class="bg-white dark:bg-gray-900">
															  <div class="max-w-5xl px-4 py-8 mx-auto lg:py-5">
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
															              	</div>
															                <input type="text" name="nama_dosen1" id="nama_dosen1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->dosen_pembimbing1->nama }} " placeholder="type here" readonly>
															                <input type="hidden" name="" id="additionalInput" value="{{ $judul->dosen_pembimbing1->id }}">
															              </div>
															              <div>
															              	<div class="flex justify-between items-center mb-2 " >
															              		<label for="nama_dosen2" class="block text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 2</label>
															              	</div>
															                <input type="text" name="nama_dosen2" id="nama_dosen2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->dosen_pembimbing2->nama }} " placeholder="type here" readonly>
															                <input type="hidden" name="" id="additionalInput1" value="{{ $judul->nama_dosen2 }}">
															              </div>
															              <div>
															                 <div class="flex justify-between items-center mb-2 " >
															              		<label for="nama_dosen3" class="block text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 3</label>
															              	</div>
															                <input type="text" name="nama_dosen3" id="nama_dosen3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->dosen_pembimbing3->nama }} " placeholder="type here" readonly>
															                <input type="hidden" name="" id="additionalInput2" value="{{ $judul->nama_dosen3 }}">
															              </div>
															              <div>
															                <div class="flex justify-between items-center mb-2 " >
															              		<label for="nama_dosen4" class="block text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 4</label>
															              	</div>
															                <input type="text" name="nama_dosen4" id="nama_dosen4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $judul->dosen_pembimbing4->nama }} " placeholder="type here" readonly>
															                <input type="hidden" name="" id="additionalInput3" value="{{ $judul->nama_dosen4 }}">
															              </div>
															              <div>
															              	<label for="dospem1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen pembimbing 1</label>
																			<select id="dospem1" name="dospem1_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
																			  <option selected>Select</option>
																			  <option value=" {{ $judul->nama_dosen1 }} "> {{ $judul->dosen_pembimbing1->nama }} </option>
																			  <option value=" {{ $judul->nama_dosen2 }} "> {{ $judul->dosen_pembimbing2->nama }} </option>
																			  <option value=" {{ $judul->nama_dosen3 }} "> {{ $judul->dosen_pembimbing3->nama }} </option>
																			  <option value=" {{ $judul->nama_dosen4 }} "> {{ $judul->dosen_pembimbing4->nama }} </option>
																			</select>
															              </div>
															              <div>
															              	<label for="dospem2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen pembimbing 2</label>
																			<select id="dospem2" name="dospem2_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
																			  <option selected>Select</option>
																			  <option value=" {{ $judul->nama_dosen1 }} "> {{ $judul->dosen_pembimbing1->nama }} </option>
																			  <option value=" {{ $judul->nama_dosen2 }} "> {{ $judul->dosen_pembimbing2->nama }} </option>
																			  <option value=" {{ $judul->nama_dosen3 }} "> {{ $judul->dosen_pembimbing3->nama }} </option>
																			  <option value=" {{ $judul->nama_dosen4 }} "> {{ $judul->dosen_pembimbing4->nama }} </option>
																			</select>
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
												    </div>
												</div>
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
			                            	@elseif($judul->status === 'Diterima')
			                            		<button id="updateProductButton" data-modal-target="updateProductModal{{ $judul->id }}" data-modal-toggle="updateProductModal{{ $judul->id }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
				                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
				                                    </svg>
				                                </button>
												<div id="updateProductModal{{ $judul->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
												    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
												        <!-- Modal content -->
												        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
												            <!-- Modal header -->
												            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
												                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
												                    Detail Judul
												                </h3>
												                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal{{ $judul->id }}">
												                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
												                    <span class="sr-only">Close modal</span>
												                </button>
												            </div>
												            <!-- Modal body -->
												            <form action="#">
												                <div class="grid gap-4 mb-4 sm:grid-cols-2">
												                    <div>
												                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
												                        <input type="text" name="nama" id="nama" value=" {{ $judul->mahasiswa->nama }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                    <div>
												                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
												                        <input type="text" name="nim" id="nim" value=" {{ $judul->mahasiswa->nim }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                    <div class="sm:col-span-2">
												                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
												                        <textarea id="judul" name="judul" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here"> {{ $judul->judul }} </textarea>   
												                    </div>
												                    <div>
												                        <label for="dospem1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen pembimbing 1</label>
												                        <input type="text" name="dospem1" id="dospem1" value=" {{ $judul->skripsi->dospem1->nama }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                    <div>
												                        <label for="dospem2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen pembimbing 2</label>
												                        <input type="text" name="dospem2" id="dospem2" value=" {{ $judul->skripsi->dospem2->nama }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                    <div>
												                        <label for="tanggal_pengajuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal pengajuan</label>
												                        <input type="text" name="tanggal_pengajuan" id="tanggal_pengajuan" value=" {{ $judul->tanggal_pengajuan }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                    <div>
												                        <label for="tanggal_disetujui" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal disetujui</label>
												                        <input type="text" name="tanggal_disetujui" id="tanggal_disetujui" value=" {{ $judul->skripsi->tanggal_disetujui }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                </div>
												            </form>
												        </div>
												    </div>
												</div>
											@elseif($judul->status === 'Ditolak')
												<button id="tolakProductButton" data-modal-target="tolakProductModal{{ $judul->id }}" data-modal-toggle="tolakProductModal{{ $judul->id }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
				                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
				                                    </svg>
				                                </button>
												<div id="tolakProductModal{{ $judul->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
												    <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
												        <!-- Modal content -->
												        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
												            <!-- Modal header -->
												            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
												                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
												                    Detail Judul
												                </h3>
												                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tolakProductModal{{ $judul->id }}">
												                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
												                    <span class="sr-only">Close modal</span>
												                </button>
												            </div>
												            <!-- Modal body -->
												            <form action="#">
												                <div class="grid gap-4 mb-4 sm:grid-cols-2">
												                    <div>
												                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
												                        <input type="text" name="nama" id="nama" value=" {{ $judul->mahasiswa->nama }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                    <div>
												                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
												                        <input type="text" name="nim" id="nim" value=" {{ $judul->mahasiswa->nim }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                    <div>
												                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
												                        <textarea id="judul" name="judul" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here"> {{ $judul->judul }} </textarea>   
												                    </div>
												                    <div>
												                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
												                        <textarea id="judul" name="judul" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here"> {{ $judul->alasan_penolakan }} </textarea>   
												                    </div>
												                    <div>
												                        <label for="tanggal_pengajuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal pengajuan</label>
												                        <input type="text" name="tanggal_pengajuan" id="tanggal_pengajuan" value=" {{ $judul->tanggal_pengajuan }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                    <div>
												                        <label for="tanggal_disetujui" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal penolakan</label>
												                        <input type="text" name="tanggal_penolakan" id="tanggal_penolakan" value=" {{ $judul->tanggal_ditolak }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here">
												                    </div>
												                </div>
												            </form>
												        </div>
												    </div>
												</div>
											@endif
			                            </td>
			                        </tr>
		                    	@endforeach
		                        
		                    </tbody>
		                </table>
		            </div>
		            <!-- <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
		                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
		                    Showing
		                    <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
		                    of
		                    <span class="font-semibold text-gray-900 dark:text-white">1000</span>
		                </span>
		                <ul class="inline-flex items-stretch -space-x-px">
		                    <li>
		                        <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
		                            <span class="sr-only">Previous</span>
		                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
		                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
		                            </svg>
		                        </a>
		                    </li>
		                    <li>
		                        <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
		                    </li>
		                    <li>
		                        <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
		                    </li>
		                    <li>
		                        <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
		                    </li>
		                    <li>
		                        <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
		                    </li>
		                    <li>
		                        <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
		                    </li>
		                    <li>
		                        <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
		                            <span class="sr-only">Next</span>
		                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
		                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
		                            </svg>
		                        </a>
		                    </li>
		                </ul>
		            </nav> -->
		            <!-- <div class="flex justify-between mt-4">
					    <div>
					        @if ($juduls->onFirstPage())
					            <span class="px-4 py-2 bg-gray-300 text-gray-600 rounded cursor-not-allowed">Previous</span>
					        @else
					            <a href="{{ $juduls->previousPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Previous</a>
					        @endif
					    </div>

					    <div>
					        Halaman {{ $juduls->currentPage() }} dari {{ $juduls->lastPage() }}
					    </div>

					    <div>
					        @if ($juduls->hasMorePages())
					            <a href="{{ $juduls->nextPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Next</a>
					        @else
					            <span class="px-4 py-2 bg-gray-300 text-gray-600 rounded cursor-not-allowed">Next</span>
					        @endif
					    </div>
					</div> -->
					<div class="flex flex-col items-center mb-3">
					  <!-- Help text -->
					  <span class="text-sm text-gray-700 dark:text-gray-400">
					      Showing <span class="font-semibold text-gray-900 dark:text-white"> {{ $juduls->currentPage() }} </span> of <span class="font-semibold text-gray-900 dark:text-white"> {{ $juduls->lastPage() }} </span> Entries
					  </span>
					  <!-- Buttons -->
					  <div class="inline-flex mt-2 xs:mt-0">
					      <a href=" {{ $juduls->previousPageUrl() }} " class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
					          Prev
					      </a>
					      <a href=" {{ $juduls->nextPageUrl() }} " class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
					          Next
					      </a>
					  </div>
					</div>
		        </div>
		    </div>
	    </section>
	</div>
@endsection