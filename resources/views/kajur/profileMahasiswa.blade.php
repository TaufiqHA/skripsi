@extends('layouts.kajur')

@section('container')
	<div class="w-full h-full grid lg:grid-cols-4 gap-4" >
		<section class="bg-white dark:bg-gray-900 lg:col-span-2">
		  <div class="max-w-4xl px-4 py-8 mx-auto lg:py-6">
		      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Data diri</h2>
		      <div>
		          <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
		              <div class="sm:col-span-2">
		                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
		                  <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->nama }} " placeholder="type here" required="">
		              </div>
		              <div class="w-full">
		                  <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
		                  <input type="text" name="nim" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->nim }} " placeholder="type here" required="">
		              </div>
		              <div class="w-full">
		                  <label for="angkatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Angkatan</label>
		                  <input type="text" name="angkatan" id="angkatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->angkatan }} " placeholder="$299" required="">
		              </div>
		              <div>
		                  <label for="fakultas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
		                  <select id="fakultas" name="fakultas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
		                      <option selected="">Select</option>
		                      @foreach($fakultas as $item)
			                      <option value=" {{ $item->fakultas }} " {{ $mahasiswa->fakultas === $item->fakultas ? "selected" : "" }} > {{ $item->fakultas }} </option>
		                      @endforeach
		                  </select>
		              </div>
		              <div>
		                  <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
		                  <select id="jurusan" name="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
		                      <option selected="">Select</option>
		                      @foreach($jurusan as $item)
			                      <option value=" {{ $item->jurusan }} " {{ $mahasiswa->jurusan === $item->jurusan ? "selected" : "" }}> {{ $item->jurusan }} </option>
		                      @endforeach
		                  </select>
		              </div>
		              <div>
		                  <label for="sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah SKS yang telah ditempuh (lulus)</label>
		                  <input type="text" name="sks" id="sks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->sks }} " placeholder="Ex. 12" required="">
		              </div>
		              <div>
		                  <label for="tanggal_ta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal pendaftaran TA</label>
		                  <input type="date" name="tanggal_ta" id="tanggal_ta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $mahasiswa->tanggal_ta }}" placeholder="Ex. 12" required="">
		              </div>
		              <div>
		                  <label for="surah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah surah juz 30 di Alquran yang telah dihafalkan</label>
		                  <input type="text" name="surah" id="surah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->surah }} " placeholder="Ex. 12" required="">
		              </div>
		              <div>
		                  <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Indeks Prestasi Kumulatif (IPK)</label>
		                  <input type="text" name="ipk" id="ipk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->ipk }} " placeholder="Ex. 12" required="">
		              </div>
		              <div>
		                  <label for="hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. HP yang dapat dihubungi</label>
		                  <input type="text" name="hp" id="hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value=" {{ $mahasiswa->hp }} " placeholder="Ex. 12" required="">
		                  <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-md text-blue-400" >
		                  	kirim pesan
		                  </button>
		              </div>
		              <div>
		                  <label for="dosen_pa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen PA</label>
		                  <select id="dosen_pa" name="dosen_pa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
		                      <option selected="">Select</option>
		                      @foreach($dosen as $item)
			                      <option value=" {{ $item->id }} " {{ $mahasiswa->dosen_pa === $item->id ? "selected" : "" }} > {{ $item->nama }} </option>
		                      @endforeach
		                  </select>
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

@section('modal')
<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Kirim pesan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                
				<form action=" {{ route('send.message') }} " method="post" target="_blank" class="max-w-xl mx-auto" id="sendMessageForm">
					@csrf
					<div>
						<label for="number-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. HP</label>
					    <input type="text" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="number" readonly value=" {{ $mahasiswa->hp }} " />
					</div>
				    <div>
						<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
						<textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
			        </div>
				</form>

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button id="sendMessageButton" data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
	<script>
		const buttonSubmit = document.getElementById('sendMessageButton')
		const form = document.getElementById('sendMessageForm')

		buttonSubmit.addEventListener('click', () => {
			form.submit()
		})
	</script>
@endsection