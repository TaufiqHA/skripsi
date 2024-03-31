<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@vite(['resources/css/app.css','resources/js/app.js'])
	<title>SITA | Login</title>
</head>
<body class="dark:bg-gray-900" >
	<section class="bg-gray-50 dark:bg-gray-900">
	  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-dvh lg:py-0">
		  	@if($errors->any())
				<div id="alert-2" class="flex w-full max-w-md items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
				  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
				    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
				  </svg>
				  <span class="sr-only">Info</span>
				  <div class="ms-3 text-sm font-medium">
				    {{ $errors->first() }}
				  </div>
				  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
				    <span class="sr-only">Close</span>
				    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
				      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
				    </svg>
				  </button>
				</div>
			@endif
	      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
	          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
	              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
	                  Sign in to your account
	              </h1>
	              <form class="space-y-4 md:space-y-6" action=" {{ route('doLogin') }} " method="POST" >
	              	@csrf
	                  <div>
	                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your username</label>
	                      <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="type here" required="" value="{{ old('username') }}" >
	                  </div>
	                  <div>
	                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
	                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
	                  </div>
	                  <div class="flex items-center justify-between">
	                      <a href=" {{ route('password.request') }} " class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
	                  </div>
	                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
	              </form>
	          </div>
	      </div>
	  </div>
</section>
</body>
</html>