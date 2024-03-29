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
	                > {{ auth()->user()->admin->nama === null ? 'Admin' : auth()->user()->admin->nama }} </span
	              >
	            </div>
	            <ul
	              class="py-1 text-gray-700 dark:text-gray-300"
	              aria-labelledby="dropdown"
	            >
	              <li>
	                <a
	                  href=" {{ route('dosen.data', ['dosen' => auth()->user()->admin->id]) }} "
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
	              href=" {{ route('user.create') }} "
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
	            >
	              <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
					  <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
					</svg>
	              <span class="flex-1 ml-3 whitespace-nowrap">User Create</span>
	            </a>
	          </li>
	          <li>
	            <a
	              href=" {{ route('admin.mahasiswa') }} "
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
	            >
	              <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
					  <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
					</svg>
	              <span class="flex-1 ml-3 whitespace-nowrap">Mahasiswa</span>
	            </a>
	          </li>
	          <li>
	            <a
	              href=" {{ route('admin.dosen') }} "
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
	            >
	              <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
					  <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
					</svg>
	              <span class="flex-1 ml-3 whitespace-nowrap">Dosen</span>
	            </a>
	          </li>
	          <li>
	            <button
	              type="button"
	              class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	              aria-controls="dropdown-sales"
	              data-collapse-toggle="dropdown-sales"
	            >
	              	<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
					  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/>
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
	                  href=" {{ route('admin.seminar') }} "
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Proposal</a
	                >
	              </li>
	              <li>
	                <a
	                  href=" # "
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Hasil</a
	                >
	              </li>
	            </ul>
	          </li>
	          <li class=" border-t border-gray-200 " >
	            <a
	              href=" {{ route('admin.appSettings') }} "
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
	            >
	              <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
					  <path d="M10.83 5a3.001 3.001 0 0 0-5.66 0H4a1 1 0 1 0 0 2h1.17a3.001 3.001 0 0 0 5.66 0H20a1 1 0 1 0 0-2h-9.17ZM4 11h9.17a3.001 3.001 0 0 1 5.66 0H20a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H4a1 1 0 1 1 0-2Zm1.17 6H4a1 1 0 1 0 0 2h1.17a3.001 3.001 0 0 0 5.66 0H20a1 1 0 1 0 0-2h-9.17a3.001 3.001 0 0 0-5.66 0Z"/>
					</svg>
	              <span class="flex-1 ml-3 whitespace-nowrap">Application settings</span>
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