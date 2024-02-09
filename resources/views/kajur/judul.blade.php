@extends('layouts.kajur')

@section('container')
	<div class="w-full h-full" >
		<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
		    <div class="mx-auto max-w-screen-2xl px-1 lg:px-12">
		        <!-- Start coding here -->
		        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
		            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
		                <div class="w-full md:w-1/2">
		                    <form class="flex items-center">
		                        <label for="simple-search" class="sr-only">Search</label>
		                        <div class="relative w-full">
		                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
		                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
		                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
		                                </svg>
		                            </div>
		                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
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
		                                    <a href="#" class="block py-2 px-4 text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
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
		                            <th scope="col" class="px-4 py-3">Nama</th>
		                            <th scope="col" class="px-4 py-3">Judul</th>
		                            <th scope="col" class="px-4 py-3">Tanggal Pengajuan</th>
		                            <th scope="col" class="px-4 py-3">Status</th>
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
			                            		<a href=" {{ route('kajur.aprove', ['judul' => $judul->id]) }} " class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
				                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
				                                    </svg>
				                                </a>
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
		            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
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
		            </nav>
		        </div>
		    </div>
	    </section>
	</div>
@endsection