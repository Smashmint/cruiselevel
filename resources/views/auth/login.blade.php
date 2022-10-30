@extends('auth.app', ['bg' => 'bg-white'])

@section('content')
<div class="min-h-full flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-56">
      <div class="mx-auto w-full max-w-sm lg:w-96">
        <div>
          <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
        </div>

        {{--
        <div class="mt-6">
          <a href="{{ route('auth.google') }}">
            <span class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-gray-900 bg-white hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue">
              <img src="{{ asset('images/google_logo.svg') }}" class="mr-2"> 
              Sign in with Google
            </span>
          </a>
        </div> --}}
  
        <div class="mt-8">
          <div class="mt-6">
              @include('auth.includes.alert')
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
              @csrf

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                <div class="mt-1 relative">
                  <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required autofocus class="appearance-none block w-full px-3 py-2 border @error('email') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue @enderror border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue sm:text-sm">
                  @error('email')
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                      <!-- Heroicon name: solid/exclamation-circle -->
                      <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                  </div>
                  @enderror
                </div>
                @error('email')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
              </div>
  
              <div class="space-y-1">
                <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                <div class="mt-1">
                  <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue sm:text-sm">
                </div>
                @error('password')
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                      <!-- Heroicon name: solid/exclamation-circle -->
                      <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                  </div>
                @enderror
                @error('password')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
              </div>
  
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue focus:ring-blue border-gray-300 rounded">
                  <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Remember me </label>
                </div>
  
                <div class="text-sm">
                  <a href="{{ route('password.request') }}" class="font-medium text-blue hover:text-blue"> Forgot your password? </a>
                </div>
              </div>
  
              <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
      <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1611767234483-0628455b04a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2274&q=80" alt="">
    </div>
  </div>
  
@endsection