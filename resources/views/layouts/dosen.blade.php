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
	          <a href="/" class="flex items-center justify-between mr-4">
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
	            class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
	            id="dropdown"
	          >
	            <div class="py-3 px-4">
	              <span
	                class="block text-sm font-semibold text-gray-900 dark:text-white"
	                > {{ auth()->user()->dosen->nama === null ? 'Dosen' : auth()->user()->dosen->nama }} </span
	              >
	            </div>
	            <ul
	              class="py-1 text-gray-700 dark:text-gray-300"
	              aria-labelledby="dropdown"
	            >
	              <li>
	                <a
	                  href=" {{ route('dosen.data', ['dosen' => auth()->user()->dosen->id]) }} "
	                  class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
	                  >My profile</a
	                >
	              </li>
	              <li>
	                <a
	                  href=" {{ route('user.settings', ['user' => auth()->user()->id]) }} "
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
	              href=" {{ route('dosen.dashboard') }} "
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
	              href=" {{ route('dosen.bimbingan') }} "
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
	        </ul>
	      </div>
	    </aside>

	    <main class="p-4 md:ml-64 h-fit pt-20 dark:bg-gray-900">
	      @yield('container')
	    </main>
	  </div>
	  @yield('modal')
	  @yield('script')
</body>
</html>