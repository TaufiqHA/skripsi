<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@vite(['resources/css/app.css','resources/js/app.js'])
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
	          <form action="#" method="GET" class="hidden md:block md:pl-2">
	            <label for="topbar-search" class="sr-only">Search</label>
	            <div class="relative md:w-64 md:w-96">
	              <div
	                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
	              >
	                <svg
	                  class="w-5 h-5 text-gray-500 dark:text-gray-400"
	                  fill="currentColor"
	                  viewBox="0 0 20 20"
	                  xmlns="http://www.w3.org/2000/svg"
	                >
	                  <path
	                    fill-rule="evenodd"
	                    clip-rule="evenodd"
	                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
	                  ></path>
	                </svg>
	              </div>
	              <input
	                type="text"
	                name="email"
	                id="topbar-search"
	                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
	                placeholder="Search"
	              />
	            </div>
	          </form>
	        </div>
	        <div class="flex items-center lg:order-2">
	          <button
	            type="button"
	            data-drawer-toggle="drawer-navigation"
	            aria-controls="drawer-navigation"
	            class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
	          >
	            <span class="sr-only">Toggle search</span>
	            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
	              <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
	            </svg>
	          <button type="button"
	            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
	            id="user-menu-button"
	            aria-expanded="false"
	            data-dropdown-toggle="dropdown">
	            <span class="sr-only">Open user menu</span>
	            <img
	              class="w-8 h-8 rounded-full"
	              src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
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
	                >Neil Sims</span
	              >
	              <span
	                class="block text-sm text-gray-900 truncate dark:text-white"
	                >name@flowbite.com</span
	              >
	            </div>
	            <ul
	              class="py-1 text-gray-700 dark:text-gray-300"
	              aria-labelledby="dropdown"
	            >
	              <li>
	                <a
	                  href="#"
	                  class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
	                  >My profile</a
	                >
	              </li>
	              <li>
	                <a
	                  href="#"
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
	                  href="#"
	                  class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
	                  ><svg
	                    class="mr-2 w-5 h-5 text-gray-400"
	                    fill="currentColor"
	                    viewBox="0 0 20 20"
	                    xmlns="http://www.w3.org/2000/svg"
	                  >
	                    <path
	                      d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
	                    ></path>
	                  </svg>
	                  Collections</a
	                >
	              </li>
	              <li>
	                <a
	                  href="#"
	                  class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
	                >
	                  <span class="flex items-center">
	                    <svg
	                      aria-hidden="true"
	                      class="mr-2 w-5 h-5 text-primary-600 dark:text-primary-500"
	                      fill="currentColor"
	                      viewBox="0 0 20 20"
	                      xmlns="http://www.w3.org/2000/svg"
	                    >
	                      <path
	                        fill-rule="evenodd"
	                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
	                        clip-rule="evenodd"
	                      ></path>
	                    </svg>
	                    Pro version
	                  </span>
	                  <svg
	                    aria-hidden="true"
	                    class="w-5 h-5 text-gray-400"
	                    fill="currentColor"
	                    viewBox="0 0 20 20"
	                    xmlns="http://www.w3.org/2000/svg"
	                  >
	                    <path
	                      fill-rule="evenodd"
	                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
	                      clip-rule="evenodd"
	                    ></path>
	                  </svg>
	                </a>
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
	        <form action="#" method="GET" class="md:hidden mb-2">
	          <label for="sidebar-search" class="sr-only">Search</label>
	          <div class="relative">
	            <div
	              class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
	            >
	              <svg
	                class="w-5 h-5 text-gray-500 dark:text-gray-400"
	                fill="currentColor"
	                viewBox="0 0 20 20"
	                xmlns="http://www.w3.org/2000/svg"
	              >
	                <path
	                  fill-rule="evenodd"
	                  clip-rule="evenodd"
	                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
	                ></path>
	              </svg>
	            </div>
	            <input
	              type="text"
	              name="search"
	              id="sidebar-search"
	              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
	              placeholder="Search"
	            />
	          </div>
	        </form>
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
	          <li>
	            <button
	              type="button"
	              class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	              aria-controls="dropdown-sales"
	              data-collapse-toggle="dropdown-sales"
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
	                  d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
	                  clip-rule="evenodd"
	                ></path>
	              </svg>
	              <span class="flex-1 ml-3 text-left whitespace-nowrap"
	                >Sales</span
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
	                  href="#"
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Products</a
	                >
	              </li>
	              <li>
	                <a
	                  href="#"
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Billing</a
	                >
	              </li>
	              <li>
	                <a
	                  href="#"
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Invoice</a
	                >
	              </li>
	            </ul>
	          </li>
	          <li>
	            <button
	              type="button"
	              class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	              aria-controls="dropdown-authentication"
	              data-collapse-toggle="dropdown-authentication"
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
	                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
	                  clip-rule="evenodd"
	                ></path>
	              </svg>
	              <span class="flex-1 ml-3 text-left whitespace-nowrap"
	                >Authentication</span
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
	            <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
	              <li>
	                <a
	                  href="#"
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Sign In</a
	                >
	              </li>
	              <li>
	                <a
	                  href="#"
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Sign Up</a
	                >
	              </li>
	              <li>
	                <a
	                  href="#"
	                  class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
	                  >Forgot Password</a
	                >
	              </li>
	            </ul>
	          </li>
	        </ul>
	        <ul
	          class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700"
	        >
	          <li>
	            <a
	              href="#"
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
	            >
	              <svg
	                aria-hidden="true"
	                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
	                fill="currentColor"
	                viewBox="0 0 20 20"
	                xmlns="http://www.w3.org/2000/svg"
	              >
	                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
	                <path
	                  fill-rule="evenodd"
	                  d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
	                  clip-rule="evenodd"
	                ></path>
	              </svg>
	              <span class="ml-3">Docs</span>
	            </a>
	          </li>
	          <li>
	            <a
	              href="#"
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
	            >
	              <svg
	                aria-hidden="true"
	                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
	                fill="currentColor"
	                viewBox="0 0 20 20"
	                xmlns="http://www.w3.org/2000/svg"
	              >
	                <path
	                  d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
	                ></path>
	              </svg>
	              <span class="ml-3">Components</span>
	            </a>
	          </li>
	          <li>
	            <a
	              href="#"
	              class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
	            >
	              <svg
	                aria-hidden="true"
	                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
	                fill="currentColor"
	                viewBox="0 0 20 20"
	                xmlns="http://www.w3.org/2000/svg"
	              >
	                <path
	                  fill-rule="evenodd"
	                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
	                  clip-rule="evenodd"
	                ></path>
	              </svg>
	              <span class="ml-3">Help</span>
	            </a>
	          </li>
	        </ul>
	      </div>
	      <div
	        class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20"
	      >
	        <a
	          href="#"
	          class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
	        >
	          <svg
	            aria-hidden="true"
	            class="w-6 h-6"
	            fill="currentColor"
	            viewBox="0 0 20 20"
	            xmlns="http://www.w3.org/2000/svg"
	          >
	            <path
	              d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"
	            ></path>
	          </svg>
	        </a>
	        <a
	          href="#"
	          data-tooltip-target="tooltip-settings"
	          class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
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
	              d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
	              clip-rule="evenodd"
	            ></path>
	          </svg>
	        </a>
	        <div
	          id="tooltip-settings"
	          role="tooltip"
	          class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip"
	        >
	          Settings page
	          <div class="tooltip-arrow" data-popper-arrow></div>
	        </div>
	        <button
	          type="button"
	          data-dropdown-toggle="language-dropdown"
	          class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:hover:text-white dark:text-gray-400 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
	        >
	          <svg
	            aria-hidden="true"
	            class="h-5 w-5 rounded-full mt-0.5"
	            xmlns="http://www.w3.org/2000/svg"
	            xmlns:xlink="http://www.w3.org/1999/xlink"
	            viewBox="0 0 3900 3900"
	          >
	            <path fill="#b22234" d="M0 0h7410v3900H0z" />
	            <path
	              d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0"
	              stroke="#fff"
	              stroke-width="300"
	            />
	            <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
	            <g fill="#fff">
	              <g id="d">
	                <g id="c">
	                  <g id="e">
	                    <g id="b">
	                      <path
	                        id="a"
	                        d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"
	                      />
	                      <use xlink:href="#a" y="420" />
	                      <use xlink:href="#a" y="840" />
	                      <use xlink:href="#a" y="1260" />
	                    </g>
	                    <use xlink:href="#a" y="1680" />
	                  </g>
	                  <use xlink:href="#b" x="247" y="210" />
	                </g>
	                <use xlink:href="#c" x="494" />
	              </g>
	              <use xlink:href="#d" x="988" />
	              <use xlink:href="#c" x="1976" />
	              <use xlink:href="#e" x="2470" />
	            </g>
	          </svg>
	        </button>
	        <!-- Dropdown -->
	        <div
	          class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
	          id="language-dropdown"
	        >
	          <ul class="py-1" role="none">
	            <li>
	              <a
	                href="#"
	                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600"
	                role="menuitem"
	              >
	                <div class="inline-flex items-center">
	                  <svg
	                    aria-hidden="true"
	                    class="h-3.5 w-3.5 rounded-full mr-2"
	                    xmlns="http://www.w3.org/2000/svg"
	                    id="flag-icon-css-us"
	                    viewBox="0 0 512 512"
	                  >
	                    <g fill-rule="evenodd">
	                      <g stroke-width="1pt">
	                        <path
	                          fill="#bd3d44"
	                          d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
	                          transform="scale(3.9385)"
	                        />
	                        <path
	                          fill="#fff"
	                          d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
	                          transform="scale(3.9385)"
	                        />
	                      </g>
	                      <path
	                        fill="#192f5d"
	                        d="M0 0h98.8v70H0z"
	                        transform="scale(3.9385)"
	                      />
	                      <path
	                        fill="#fff"
	                        d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
	                        transform="scale(3.9385)"
	                      />
	                    </g>
	                  </svg>
	                  English (US)
	                </div>
	              </a>
	            </li>
	            <li>
	              <a
	                href="#"
	                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600"
	                role="menuitem"
	              >
	                <div class="inline-flex items-center">
	                  <svg
	                    aria-hidden="true"
	                    class="h-3.5 w-3.5 rounded-full mr-2"
	                    xmlns="http://www.w3.org/2000/svg"
	                    id="flag-icon-css-de"
	                    viewBox="0 0 512 512"
	                  >
	                    <path fill="#ffce00" d="M0 341.3h512V512H0z" />
	                    <path d="M0 0h512v170.7H0z" />
	                    <path fill="#d00" d="M0 170.7h512v170.6H0z" />
	                  </svg>
	                  Deutsch
	                </div>
	              </a>
	            </li>
	            <li>
	              <a
	                href="#"
	                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600"
	                role="menuitem"
	              >
	                <div class="inline-flex items-center">
	                  <svg
	                    aria-hidden="true"
	                    class="h-3.5 w-3.5 rounded-full mr-2"
	                    xmlns="http://www.w3.org/2000/svg"
	                    id="flag-icon-css-it"
	                    viewBox="0 0 512 512"
	                  >
	                    <g fill-rule="evenodd" stroke-width="1pt">
	                      <path fill="#fff" d="M0 0h512v512H0z" />
	                      <path fill="#009246" d="M0 0h170.7v512H0z" />
	                      <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
	                    </g>
	                  </svg>
	                  Italiano
	                </div>
	              </a>
	            </li>
	            <li>
	              <a
	                href="#"
	                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600"
	                role="menuitem"
	              >
	                <div class="inline-flex items-center">
	                  <svg
	                    aria-hidden="true"
	                    class="h-3.5 w-3.5 rounded-full mr-2"
	                    xmlns="http://www.w3.org/2000/svg"
	                    xmlns:xlink="http://www.w3.org/1999/xlink"
	                    id="flag-icon-css-cn"
	                    viewBox="0 0 512 512"
	                  >
	                    <defs>
	                      <path
	                        id="a"
	                        fill="#ffde00"
	                        d="M1-.3L-.7.8 0-1 .6.8-1-.3z"
	                      />
	                    </defs>
	                    <path fill="#de2910" d="M0 0h512v512H0z" />
	                    <use
	                      width="30"
	                      height="20"
	                      transform="matrix(76.8 0 0 76.8 128 128)"
	                      xlink:href="#a"
	                    />
	                    <use
	                      width="30"
	                      height="20"
	                      transform="rotate(-121 142.6 -47) scale(25.5827)"
	                      xlink:href="#a"
	                    />
	                    <use
	                      width="30"
	                      height="20"
	                      transform="rotate(-98.1 198 -82) scale(25.6)"
	                      xlink:href="#a"
	                    />
	                    <use
	                      width="30"
	                      height="20"
	                      transform="rotate(-74 272.4 -114) scale(25.6137)"
	                      xlink:href="#a"
	                    />
	                    <use
	                      width="30"
	                      height="20"
	                      transform="matrix(16 -19.968 19.968 16 256 230.4)"
	                      xlink:href="#a"
	                    />
	                  </svg>
	                  中文 (繁體)
	                </div>
	              </a>
	            </li>
	          </ul>
	        </div>
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