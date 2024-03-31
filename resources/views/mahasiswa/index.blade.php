@extends('layouts.main')

@section('container')
<div class="grid grid-cols-4 gap-4" >
	<div class="col-span-3" >
		<div class="h-56 grid grid-cols-1 bg-gradient-to-tr from-pink-300 to-indigo-700 rounded-lg mb-4 p-4">
			<div>
				<p class="text-lg font-semibold text-gray-600">Welcome back,</p>
				<h2 class="text-2xl font-bold dark:text-white">{{ auth()->user()->mahasiswa->nama }}</h2>
			</div>
			<div class="grid grid-cols-4 gap-4 " >
				<a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
					<h2>testing</h2>
				</a>
				<a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
					<h2>testing</h2>
				</a>
				<a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
					<h2>testing</h2>
				</a>
				<a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
					<h2>testing</h2>
				</a>
			</div>
		</div>
		<div class="grid grid-cols-1 mb-4 h-72" >
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
						<ol class="relative border-s border-gray-200 dark:border-gray-700">                  
						    <li class="ms-4">
						        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
						        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
						        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ubah bab 1 dan bab 2 nya</h3>
						    </li>
						</ol>
			        </div>
			        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
			            <ol class="relative border-s border-gray-200 dark:border-gray-700">                  
						    <li class="ms-4">
						        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
						        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
						        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind CSS</h3>
						    </li>
						</ol>
			        </div>
			        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
			            <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
			                <div class="flex flex-col">
			                    <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
			                    <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
			                </div>
			                <div class="flex flex-col">
			                    <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
			                    <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
			                </div>
			                <div class="flex flex-col">
			                    <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
			                    <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
			                </div>
			            </dl>
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<div class="grid grid-cols-1 rounded-lg mb-4" >
		<div class="w-full h-full rounded-lg shadow max-w-xs p-4 overflow-y-auto bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
		    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Message</h5>
		    <div class="max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex items-center justify-center gap-4 cursor-pointer">
			    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
				  <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
				  <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
				</svg>
			    <a href="#">
			        <h5 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">SITA Matematika</h5>
			    </a>
			</div>
		</div>
	</div>
</div>
@endsection