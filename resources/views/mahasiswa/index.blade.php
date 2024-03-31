@extends('layouts.main')

@section('container')
<div class="grid grid-row-2 lg:grid-cols-4 gap-4" >
	<div class="col-span-3" >
		<div class="h-48 grid grid-cols-1 bg-gradient-to-tr from-pink-300 to-indigo-700 rounded-lg mb-4 p-4">
			<div>
				<p class="text-lg font-semibold text-gray-600">Welcome back,</p>
				<h2 class="text-2xl font-bold dark:text-white">{{ auth()->user()->mahasiswa->nama ? auth()->user()->mahasiswa->nama : 'User' }}</h2>
			</div>
			<div class="grid grid-cols-4 gap-4 " >
				<!--  -->
			</div>
		</div>
		<div class="grid grid-cols-1 mb-4 h-80" >
			<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
			    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
			        <li class="me-2">
			            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Dospem 1</button>
			        </li>
			        <li class="me-2">
			            <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Dospem 2</button>
			        </li>
			        <li class="me-2">
			            <button id="statistics-tab" data-tabs-target="#statistics" type="button" role="tab" aria-controls="statistics" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Event</button>
			        </li>
			    </ul>
			    <div id="defaultTabContent">
			        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
			        	@if($emptyRevisi)
			        		<h2 class="text-md font-semibold text-center text-gray-400" >Tidak ada revisi</h2>
			        	@else
			        		<ol class="relative border-s border-gray-200 dark:border-gray-700">              
								<li class="ms-4">
							        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
							        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"> {{ $revisi[0]->revisi->last()->tanggal_revisi }} </time>
							        <h3 class="text-lg font-semibold text-gray-900 dark:text-white"> {{ $revisi[0]->revisi->last()->revisi }} </h3>
							    </li>
							</ol>
			        	@endif 
			        </div>
			        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
			        	@if($emptyRevisi)
			        		<h2 class="text-md font-semibold text-center text-gray-400" >Tidak ada revisi</h2>
			        	@else
			        		<ol class="relative border-s border-gray-200 dark:border-gray-700">                  
							    <li class="ms-4">
							        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
							        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"> {{ $revisi[1]->revisi->last()->tanggal_revisi }} </time>
							        <h3 class="text-lg font-semibold text-gray-900 dark:text-white"> {{ $revisi[1]->revisi->last()->revisi }} </h3>
							    </li>
							</ol>
			        	@endif
			            
			        </div>
			        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
			            <!--  -->
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<div class="grid grid-cols-1 col-span-3 lg:col-span-1 rounded-lg mb-4" >
		<div class="w-full h-full rounded-lg shadow p-4 overflow-y-auto bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
		    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Message</h5>
		    @if($emptyPesan)
				@foreach($pesan as $item)
			    	<div data-modal-target="pesanModal{{ $item->id }}" data-modal-toggle="pesanModal{{ $item->id }}" class="max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex items-center justify-center gap-4 mb-3 cursor-pointer">
			    		@if($item->is_open)
							<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
							  <path d="m3.62 6.389 8.396 6.724 8.638-6.572-7.69-4.29a1.975 1.975 0 0 0-1.928 0L3.62 6.39Z"/>
							  <path d="m22 8.053-8.784 6.683a1.978 1.978 0 0 1-2.44-.031L2.02 7.693a1.091 1.091 0 0 0-.019.199v11.065C2 20.637 3.343 22 5 22h14c1.657 0 3-1.362 3-3.043V8.053Z"/>
							</svg>
			    		@else
			    			<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
							  <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
							  <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
							</svg>
			    		@endif
					    <a href="#">
					        <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white"> {{ $item->pengirim }} </h5>
					    </a>
					    <span class=" {{ $item->is_open ? 'hidden' : '' }} inline-flex items-center justify-center w-2 h-2 text-sm font-semibold text-green-800 bg-green-400 rounded-full dark:bg-green-700 dark:text-green-500">
							<span class="sr-only">Icon description</span>
						</span>
					</div>
					<!-- modal pesan start -->
						<div id="pesanModal{{ $item->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
						    <div class="relative p-4 w-full max-w-md max-h-full">
						        <!-- Modal content -->
						        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
						            <!-- Modal header -->
						            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
						                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
						                    Pesan
						                </h3>
						                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="pesanModal{{ $item->id }}">
						                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
						                    </svg>
						                    <span class="sr-only">Close modal</span>
						                </button>
						            </div>
						            <!-- Modal body -->
						            <div class="p-4 md:p-5">
						                <form action=" {{ route('mahasiswa.pesan.open', ['message' => $item->id]) }} " method="post">
						                	@csrf
						                	@method('put')
						                    <div>
						                        <label for="pengirim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengirim</label>
						                        <input type="text" name="pengirim" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" value=" {{ $item->pengirim }} " readonly />
						                    </div>
						                    <div>    
												<label for="pesan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
												<textarea id="pesan" name="pesan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." readonly > {{ $item->pesan }} </textarea>
						                    </div>
						                    <button type="submit" class=" {{ $item->is_open ? 'hidden' : '' }} w-full mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tandai telah baca</button>
						                </form>
						            </div>
						        </div>
						    </div>
						</div> 
					<!-- modal pesan end -->
			    @endforeach
		    @else
		    	<h2 class="text-md font-semibold text-center text-gray-400" >Tidak ada pesan</h2>
		    @endif
		    
		</div>
	</div>
</div>
@endsection