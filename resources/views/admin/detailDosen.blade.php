@extends('layouts.admin')

@section('container')
	<div class="w-full h-full" >
		<section class="bg-white dark:bg-gray-900">
		  <div class="max-w-5xl px-4 py-8 mx-auto">
		      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Data diri</h2>
		      <form>
		          <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
		              <div class="sm:col-span-2">
		                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama lengkap</label>
		                  <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->nama }} " placeholder="Type product name" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
		                  <input type="text" name="nip" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->nip }} " placeholder="Product brand" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
		                  <input type="text" name="jabatan" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->jabatan }} " placeholder="$299" readonly>
		              </div>
		              <div>
		                  <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori pegawai</label>
		                  <input type="text" name="kategori" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->kategori }} " placeholder="Ex. 12" readonly>
		              </div>
		              <div>
		                  <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status kepegawaian</label>
		                  <input type="text" name="status" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->status }} " placeholder="Ex. 12" readonly>
		              </div>
		          </div>
		      </form>
		  </div>
		</section>
	</div>
@endsection