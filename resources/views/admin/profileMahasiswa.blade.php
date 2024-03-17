@extends('layouts.admin')

@section('container')
	<div class="w-full h-full grid lg:grid-cols-4 gap-4" >
		<section class="bg-white dark:bg-gray-900 lg:col-span-2">
		  <div class="max-w-4xl px-4 py-8 mx-auto lg:py-6">
		      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Data diri</h2>
		      <div>
		          <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
		              <div class="sm:col-span-2">
		                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
		                  <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->nama }} " placeholder="type here" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
		                  <input type="text" name="nim" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->nim }} " placeholder="type here" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="angkatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Angkatan</label>
		                  <input type="text" name="angkatan" id="angkatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->angkatan }} " placeholder="$299" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="fakultas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
		                  <input type="text" name="fakultas" id="fakultas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->fakultas }} " placeholder="$299" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
		                  <input type="text" name="jurusan" id="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->jurusan }} " placeholder="$299" readonly>
		              </div>
		              <div>
		                  <label for="sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah SKS yang telah ditempuh (lulus)</label>
		                  <input type="text" name="sks" id="sks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->sks }} " placeholder="Ex. 12" readonly>
		              </div>
		              <div>
		                  <label for="tanggal_ta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal pendaftaran TA</label>
		                  <input type="date" name="tanggal_ta" id="tanggal_ta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $mahasiswa->tanggal_ta }}" placeholder="Ex. 12" readonly>
		              </div>
		              <div>
		                  <label for="surah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah surah juz 30 di Alquran yang telah dihafalkan</label>
		                  <input type="text" name="surah" id="surah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->surah }} " placeholder="Ex. 12" readonly>
		              </div>
		              <div>
		                  <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Indeks Prestasi Kumulatif (IPK)</label>
		                  <input type="text" name="ipk" id="ipk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->ipk }} " placeholder="Ex. 12" readonly>
		              </div>
		              <div>
		                  <label for="hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. HP yang dapat dihubungi</label>
		                  <input type="text" name="hp" id="hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->hp }} " placeholder="Ex. 12" readonly>
		              </div>
		              <div class="w-full">
		                  <label for="dosen_pa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen PA</label>
		                  <input type="text" name="dosen_pa" id="dosen_pa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $dosen->nama }} " placeholder="$299" readonly>
		              </div>
		          </div>
		      </div>
		  </div>
		</section>
		<div class="w-full h-fit bg-white p-5 lg:col-span-2 flex justify-center items-center" >
			<img class="w-full h-auto max-w-xs rounded-lg" src=" {{ $user->avatar ? asset('storage/' . $user->avatar) : asset('img/user1.png') }} " alt="image description">
		</div>
	</div>
@endsection
