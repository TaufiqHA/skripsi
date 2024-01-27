@extends('layouts.main')

@section('container')
	<div class="w-full h-full" >
		<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 h-full overflow-y-auto">
		    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
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
		                    <button  id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
		                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
		                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
		                        </svg>
		                        Tambah judul
		                    </button>
		                    <div class="flex items-center space-x-3 w-full md:w-auto">
		                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
		                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
		                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
		                            </svg>
		                            Actions
		                        </button>
		                        <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
		                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
		                                <li>
		                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Diterima</a>
		                                </li>
		                                <li>
		                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ditolak</a>
		                                </li>
		                                <li>
		                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Diajukan</a>
		                                </li>
		                                <li>
		                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semua</a>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div>
		                <table class="w-full table-auto text-sm text-left text-gray-500 dark:text-gray-400">
		                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
		                        <tr>
		                            <th scope="col" class="px-4 py-3 capitalize ">Judul</th>
		                            <th scope="col" class="px-4 py-3 capitalize ">Status</th>
		                            <th scope="col" class="px-4 py-3">
		                                <span class="sr-only">Actions</span>
		                            </th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($judul as $item)
		                    		<tr class="border-b dark:border-gray-700">
			                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-wrap "> {{ $item->judul }} </th>
			                            <td class="px-4 py-3 "> {{ $item->status }} </td>
			                            <td class="px-4 py-3 flex items-center justify-end">
			                                <button class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
			                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
			                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
			                                    </svg>
			                                </button>
			                            </td>
			                        </tr>
		                    	@endforeach
		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
	    </section>
	</div>
@endsection

@section('modal')
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full ">
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto ">
        <!-- Modal content -->
        <div class="relative h-[90vh] overflow-y-auto p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah judul
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action=" {{ route('judul.add') }} " method="post" >
            	@csrf
            	<input type="hidden" name="mahasiswa_id" value=" {{ $mahasiswa->id }} ">
                <div class="grid gap-4 mb-4 sm:grid-cols-3">
                    <div>
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="text" name="nim" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here" required="">
                    </div>
                    <div>
                        <label for="konsentrasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konsentrasi</label>
                        <input type="text" name="konsentrasi" id="konsentrasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here" required="">
                    </div>
                    <div class="sm:col-span-3" >
						<label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
						<textarea id="judul" name="judul" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="type here"></textarea>
                    </div>
                    <div>
                        <label for="teknik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teknik pengumpulan data</label>
                        <input type="text" name="teknik" id="teknik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here" required="">
                    </div>
                    <div>
                        <label for="bentuk_data" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bentuk data</label>
                        <select id="bentuk_data" name="bentuk_data" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>
                    <div>
                        <label for="metode" class="block mb-2 text-[0.8rem] font-medium text-gray-900 dark:text-white">Metode analisis yang digunakan</label>
                        <input type="text" name="metode" id="metode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here" required="">
                    </div>
                    <div>
                        <label for="tempat " class="block mb-2 text-[0.8rem] font-medium text-gray-900 dark:text-white">Tempat pengumpulan data</label>
                        <input type="text" name="tempat " id="tempat " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="type here" required="">
                    </div>
                    <div class="sm:col-span-2" >
						<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="bukti">Bukti konsultasi</label>
						<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="bukti_help" id="bukti" name="bukti" type="file">
                    </div>
                    <div class="sm:col-span-3" >
                    	<div class="grid gap-4 sm:grid-cols-4" >
                    		<div>
		                        <label for="nama_dospem1" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 1</label>
		                        <select id="nama_dospem1" name="nama_dospem1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
		                            <option selected="">Select category</option>
		                            @foreach($dosen as $item)
			                            <option value=" {{ $item->id }} "> {{ $item->nama }} </option>
		                            @endforeach
		                        </select>
		                    </div>
		                    <div>
		                        <label for="nama_dospem2" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 2</label>
		                        <select id="nama_dospem2" name="nama_dospem2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
		                            <option selected="">Select category</option>
		                            @foreach($dosen as $item)
			                            <option value=" {{ $item->id }} "> {{ $item->nama }} </option>
		                            @endforeach
		                        </select>
		                    </div>
		                    <div>
		                        <label for="nama_dospem3" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 3</label>
		                        <select id="nama_dospem3" name="nama_dospem3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
		                            <option selected="">Select category</option>
		                            @foreach($dosen as $item)
			                            <option value=" {{ $item->id }} "> {{ $item->nama }} </option>
		                            @endforeach
		                        </select>
		                    </div>
		                    <div>
		                        <label for="nama_dospem4" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Nama calon dosen pembimbing 4</label>
		                        <select id="nama_dospem4" name="nama_dospem4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
		                            <option selected="">Select category</option>
		                            @foreach($dosen as $item)
			                            <option value=" {{ $item->id }} "> {{ $item->nama }} </option>
		                            @endforeach
		                        </select>
		                    </div>
                    	</div>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Tambah judul
                </button>
            </form>
        </div>
    </div>
</div>
@endsection