@extends($extends)

@section('container')
	@if($errors->any())
		<div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
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
	@if(session()->get('status'))
		<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
		  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
		    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
		  </svg>
		  <span class="sr-only">Info</span>
		  <div class="ms-3 text-sm font-medium">
		    {{ session()->get('status') }}
		  </div>
		  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
		    <span class="sr-only">Close</span>
		    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
		      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
		    </svg>
		  </button>
		</div>
	@endif
	<div class="w-full grid grid-rows-2 gap-4 lg:grid-cols-4" >
		<section class="bg-gray-50 dark:bg-gray-900 col-span-2">
		  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0">
		      <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
		          <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
		              Profile image
		          </h2>
		          <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action=" {{ route('update.avatar', ['user' => auth()->user()->id]) }} " method="POST" enctype="multipart/form-data" >
		          	@csrf
		          		<div>
							<img class="rounded-lg h-auto max-w-36 mx-auto " src=" {{ auth()->user()->avatar ? asset('/storage/'.auth()->user()->avatar) : asset('img/user1.png') }} " alt="image description" id="preview">
		          		</div>
		              <div>
							<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Avatar</label>
							<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="avatar" onchange="previewImage(event)">
		              </div>
		              <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>
		          </form>
		      </div>
		  </div>
		</section>
		<section class="bg-gray-50 dark:bg-gray-900 col-span-2">
		  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0">
		      <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
		          <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
		              Change password
		          </h2>
		          <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action=" {{ route('password.updated') }} " method="post">
		          	@csrf
		          	@method('put')
		              <div>
		                  <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current password</label>
		                  <input type="text" name="current_password" id="current_password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
		              </div>
		              <div>
		                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
		                  <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
		              </div>
		              <div>
		                  <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
		                  <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
		              </div>
		              <div class="flex items-start">
		                  <div class="flex items-center h-5">
		                    <input id="newsletter" aria-describedby="newsletter" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
		                  </div>
		                  <div class="ml-3 text-sm">
		                    <label for="newsletter" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
		                  </div>
		              </div>
		              <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Reset passwod</button>
		          </form>
		      </div>
		  </div>
		</section>
	</div>
@endsection

@section('script')
	<script>
		function previewImage(event) {
			var reader = new FileReader();
			reader.onload = function(){
	            var preview = document.getElementById('preview');
	            preview.src = reader.result;
	            preview.style.display = 'block';
	        }
	        reader.readAsDataURL(event.target.files[0]);
		}
	</script>
@endsection