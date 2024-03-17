<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@vite(['resources/css/app.css','resources/js/app.js'])
	<link rel="icon" href=" {{ asset('img/logo_sita.png') }} ">
	<title>SITA | {{ $title }}</title>
</head>
<body class="dark:bg-gray-900" >
	<div class="antialiased bg-gray-50 dark:bg-gray-900">
	    <nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
	      <div class="flex flex-wrap justify-between items-center">
	        <div class="flex justify-start items-center">
	          <button
	            data-drawer-target="drawer-navigation"
	            data-drawer-toggle="drawer-navigation"
	            aria-controls="drawer-navigation"
	            class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
	          >
	            <svg
	              aria-hidden="true"
	              class="w-6 h-6"
	              fill="currentColor"
	              viewBox="0 0 20 20"
	              xmlns="http://www.w3.org/2000/svg"
	            >
	              <path
	                fill-rule="evenodd"
	                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
	                clip-rule="evenodd"
	              ></path>
	            </svg>
	            <svg
	              aria-hidden="true"
	              class="hidden w-6 h-6"
	              fill="currentColor"
	              viewBox="0 0 20 20"
	              xmlns="http://www.w3.org/2000/svg"
	            >
	              <path
	                fill-rule="evenodd"
	                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
	                clip-rule="evenodd"
	              ></path>
	            </svg>
	            <span class="sr-only">Toggle sidebar</span>
	          </button>
	          <a href="https://flowbite.com" class="flex items-center justify-between mr-4">
	            <img
	              src=" {{ asset('img/logo_sita.png') }} "
	              class="mr-3 h-8"
	              alt="Logo"
	            />
	            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SITA</span>
	          </a>
	        </div>
	        <div class="flex items-center lg:order-2">
	          <button
	            type="button"
	            data-drawer-toggle="drawer-navigation"
	            aria-controls="drawer-navigation"
            class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
	          >
	          <button type="button"
	            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
	            id="user-menu-button"
	            aria-expanded="false"
	            data-dropdown-toggle="dropdown">
	            <span class="sr-only">Open user menu</span>
	            <img
	              class="h-auto max-w-8 rounded-full aspect-square"
	              src=" {{ auth()->user()->avatar === null ? asset('img/user1.png') : asset('storage/' . auth()->user()->avatar) }} "
	              alt="user photo"
	            />
	          </button>
	          <!-- Dropdown menu -->
	          <div
	            class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
	            id="dropdown"
	          >
	            <div class="py-3 px-4">
	              <span
	                class="block text-sm font-semibold text-gray-900 dark:text-white"
	                > {{ auth()->user()->mahasiswa->nama }} </span
	              >
	            </div>
	            <ul
	              class="py-1 text-gray-700 dark:text-gray-300"
	              aria-labelledby="dropdown"
	            >
	              <li>
	                <a
	                  href=" {{ route('mahasiswa.data', ['mahasiswa' => auth()->user()->mahasiswa->id]) }} "
	                  class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
	                  >My profile</a
	                >
	              </li>
	              <li>
	                <a href=" {{ route('user.settings', ['user' => auth()->user()->id]) }} "
	                  class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
	                  >Account settings</a
	                >
	              </li>
	            </ul>
	            <ul
	              class="py-1 text-gray-700 dark:text-gray-300"
	              aria-labelledby="dropdown"
	            >
	              <li>
	                <a
	                  href=" {{ route('logout') }} "
	                  class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
	                  >Sign out</a
	                >
	              </li>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </nav>

	    <!-- Sidebar -->

	    <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
	      aria-label="Sidenav"
	      id="drawer-navigation">
	      <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
	        <ul class="space-y-2">
	          <li>
	            <a
	              href=" {{ route('mahasiswa.dashboard') }} "
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
	            >
	              <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
				    <path fill-rule="evenodd" d="M11.3 3.3a1 1 0 0 1 1.4 0l6 6 2 2a1 1 0 0 1-1.4 1.4l-.3-.3V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3c0 .6-.4 1-1 1H7a2 2 0 0 1-2-2v-6.6l-.3.3a1 1 0 0 1-1.4-1.4l2-2 6-6Z" clip-rule="evenodd"/>
				  </svg>
	              <span class="ml-3">Dashboard</span>
	            </a>
	          </li>
	          <li>
	            <a
	              href=" {{ route('judul.index') }} "
	              type="button"
	              class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	            >
	              <svg
	                aria-hidden="true"
	                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
	                fill="currentColor"
	                viewBox="0 0 20 20"
	                xmlns="http://www.w3.org/2000/svg"
	              >
	                <path
	                  fill-rule="evenodd"
	                  d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
	                  clip-rule="evenodd"
	                ></path>
	              </svg>
	              <span class="flex-1 ml-3 text-left whitespace-nowrap"
	                >Judul</span
	              >
	            </a>
	          </li>
	          <li>
	            <a
	              href=" {{ route('mahasiswa.bimbingan') }} "
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
	            >
	              <svg
	                aria-hidden="true"
	                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
	                fill="currentColor"
	                viewBox="0 0 20 20"
	                xmlns="http://www.w3.org/2000/svg"
	              >
	                <path
	                  d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"
	                ></path>
	                <path
	                  d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"
	                ></path>
	              </svg>
	              <span class="flex-1 ml-3 whitespace-nowrap">Bimbingan</span>
	              <!-- <span
	                class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800"
	              >
	                4
	              </span> -->
	            </a>
	          </li>
	          <li>
	            <button
	              type="button"
	              class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	              aria-controls="dropdown-sales"
	              data-collapse-toggle="dropdown-sales"
	            >
	              <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
				    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3a2.5 2.5 0 1 1 2-4.5M19.5 17h.5c.6 0 1-.4 1-1a3 3 0 0 0-3-3h-1m0-3a2.5 2.5 0 1 0-2-4.5m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3c0 .6-.4 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
				  </svg>
	              <span class="flex-1 ml-3 text-left whitespace-nowrap"
	                >Seminar</span
	              >
	              <svg
	                aria-hidden="true"
	                class="w-6 h-6"
	                fill="currentColor"
	                viewBox="0 0 20 20"
	                xmlns="http://www.w3.org/2000/svg"
	              >
	                <path
	                  fill-rule="evenodd"
	                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
	                  clip-rule="evenodd"
	                ></path>
	              </svg>
	            </button>
	            <ul id="dropdown-sales" class="hidden py-2 space-y-2">
	              <li>
	                <a
	                  href=" {{ route('seminar.proposal', ['mahasiswa' => auth()->user()->mahasiswa->id]) }} "
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Proposal</a
	                >
	              </li>
	              <li>
	                <a
	                  href=" {{ route('seminar.hasil', ['mahasiswa' => auth()->user()->mahasiswa->id]) }} "
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Hasil</a
	                >
	              </li>
	            </ul>
	          </li>
	          <li>
	            <a
	              href="#"
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
	            >
	              <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
				    <path fill-rule="evenodd" d="M8 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.1a5 5 0 0 0-4.7 1.4l-6.7 6.6a3 3 0 0 0-.8 1.6l-.7 3.7a3 3 0 0 0 3.5 3.5l3.7-.7a3 3 0 0 0 1.5-.9l4.2-4.2V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
				    <path fill-rule="evenodd" d="M17.4 8a1 1 0 0 1 1.2.3 1 1 0 0 1 0 1.6l-.3.3-1.6-1.5.4-.4.3-.2Zm-2.1 2.1-4.6 4.7-.4 1.9 1.9-.4 4.6-4.7-1.5-1.5ZM17.9 6a3 3 0 0 0-2.2 1L9 13.5a1 1 0 0 0-.2.5L8 17.8a1 1 0 0 0 1.2 1.1l3.7-.7c.2 0 .4-.1.5-.3l6.6-6.6A3 3 0 0 0 18 6Z" clip-rule="evenodd"/>
				  </svg>
	              <span class="flex-1 ml-3 whitespace-nowrap">Ujian</span>
	              <!-- <span
	                class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800"
	              >
	                4
	              </span> -->
	            </a>
	          </li>
	        </ul>
	      </div>
	    </aside>

	    <main class="p-4 md:ml-64 h-fit pt-20 dark:bg-gray-900">
	      @yield('container')
	    </main>
	  </div>
	  @yield('modal')
	  @yield('script')

	  <!-- <!-- user settings modal -->

		<!-- Main modal -->
		<div id="updateProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
		    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
		        <!-- Modal content -->
		        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
		            <!-- Modal header -->
		            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
		                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
		                    User settings
		                </h3>
		                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
		                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
		                    <span class="sr-only">Close modal</span>
		                </button>
		            </div>
		            <!-- Modal body -->
		            <form action="#">
		                <div class="grid gap-4 mb-4 sm:grid-cols-2">
		                    <div>
		                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
		                        <input type="text" name="username" id="username" value="iPad Air Gen 5th Wi-Fi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
		                    </div>
		                    <div>
		                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
		                        <input type="email" name="email" id="email" value="Google" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple">
		                    </div>
		                    <div>
								<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Foto profile</label>
								<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="avatar" name="avatar" type="file">
		                    </div>
		                    <div>
								<figure class="max-w-xs">
								  <img class="h-32 max-w-xs rounded-lg mx-auto" src=" {{ asset('img/user1.png') }} " alt="image description" id="preview" name="preview">
								  <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Preview</figcaption>
								</figure>
		                    </div>
		                </div>
		                <div class="flex items-center space-x-4">
		                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
		                        Update
		                    </button>
		                </div>
		            </form>
		        </div>
		    </div>
		</div>

	  <!-- end user settings modal --> -->
	  <!-- script js -->
	  	<script>
	  		const imageInput = document.getElementById('avatar');

			imageInput.addEventListener('change', function() {
			  const reader = new FileReader();

			  reader.onload = function() {
			    const preview = document.getElementById('preview');
			    preview.src = reader.result;
			  };

			  reader.readAsDataURL(imageInput.files[0]);
			});

	  	</script>
	  <!-- end script js -->

</body>
</html>
