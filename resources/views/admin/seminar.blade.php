@extends('layouts.admin')

@section('container')
	<div class=" w-full h-full " >
		<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
		    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
		        <!-- Start coding here -->
		        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
		            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
		                <div class="w-full md:w-1/2">
		                    <form class="flex items-center" action=" {{ route('admin.search.sempro') }} " >
		                        <label for="simple-search" class="sr-only">Search</label>
		                        <div class="relative w-full">
		                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
		                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
		                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
		                                </svg>
		                            </div>
		                            <input name="search" type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
		                        </div>
		                    </form>
		                </div>
		                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
		                    <div class="flex items-center space-x-3 w-full md:w-auto">
		                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
		                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
		                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
		                            </svg>
		                            Angkatan
		                        </button>
		                        <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
		                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
		                            	@foreach($angkatan as $item)
		                            		<li>
			                                    <a href=" {{ route('admin.filter.sempro', ['filter' => $item->angkatan]) }} " class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> {{ $item->angkatan }} </a>
			                                </li>	
		                            	@endforeach
		                                <li>
		                                    <a href=" {{ route('admin.filter.sempro') }} " class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">semua</a>
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
		                            <th scope="col" class="px-4 py-3">NIM</th>
		                            <th scope="col" class="px-4 py-3">Angkatan</th>
		                            <th scope="col" class="px-4 py-3">Berkas</th>
		                            <th scope="col" class="px-4 py-3">
		                                <span class="sr-only">Actions</span>
		                            </th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($pengajuan as $item)
		                    		<tr class="border-b dark:border-gray-700">
			                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ $item->mahasiswa->nama }} </th>
			                            <td class="px-4 py-3"> {{ $item->mahasiswa->nim }} </td>
			                            <td class="px-4 py-3"> {{ $item->mahasiswa->angkatan }} </td>
			                            <td class="px-4 py-3"> 
			                            	<a href=" {{ route('admin.berkas.download', ['pengajuan' => $item->id]) }} " class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
												<svg class="w-4 h-4 text-white dark:text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
												  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01"/>
												</svg>
												Download
											</a>
										</td>
			                            <td class="px-4 py-3 flex items-center justify-end">
			                                <button id="apple-imac-27-dropdown-button" data-dropdown-toggle="dropdown{{ $item->id }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
			                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
			                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
			                                    </svg>
			                                </button>
			                                <div id="dropdown{{ $item->id }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
			                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown{{ $item->id }}-button">
			                                        <li>
			                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
			                                        </li>
			                                        <li>
			                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
			                                        </li>
			                                    </ul>
			                                    <div class="py-1">
			                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
			                                    </div>
			                                </div>
			                            </td>
			                        </tr>
		                    	@endforeach
		                    </tbody>
		                </table>
		            </div>
		            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
		                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
		                    Showing
		                    <span class="font-semibold text-gray-900 dark:text-white"> {{ $pengajuan->currentPage() }} </span>
		                    of
		                    <span class="font-semibold text-gray-900 dark:text-white"> {{ $pengajuan->lastPage() }} </span>
		                </span>
		                <ul class="inline-flex items-stretch -space-x-px">
		                    <li>
		                        <a href=" {{ $pengajuan->previousPageUrl() }} " class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
		                            <span class="sr-only">Previous</span>
		                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
		                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
		                            </svg>
		                        </a>
		                    </li>
		                    <li>
		                        <a href=" {{ $pengajuan->nextPageUrl() }} " class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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