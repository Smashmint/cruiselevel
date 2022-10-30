@extends('auth.app')

@section('content')
<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-blue.svg" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create account</h2>
    </div>
  
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

        {{--<div class="mt-6">
          <a href="{{ route('auth.google') }}">
            <span class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-gray-900 bg-white hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue">
              <img src="{{ asset('images/google_logo.svg') }}" class="mr-2"> 
              Sign up with Google
            </span>
          </a>
        </div> 

        <div class="mt-6 relative">
          <div class="absolute inset-0 flex items-center" aria-hidden="true">
            <div class="w-full border-t border-gray-300"></div>
          </div>

          <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-white text-gray-500"> Or continue with </span>
          </div>
        </div> --}}

        @include('auth.includes.alert')
        <form class="space-y-6" action="{{ route('register') }}" method="POST">
          @csrf

          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <div class="mt-1 relative">
              <input id="name" name="name" type="name" autocomplete="first-name" required autofocus class="appearance-none block w-full px-3 py-2 border @error('name') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue rounded-md shadow-sm sm:text-sm">
              @error('name')
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
              @enderror
            </div>
            @error('name')<p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>@enderror
          </div>

          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue sm:text-sm">
            </div>
          </div>
  
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-1 relative">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border @error('password') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue rounded-md shadow-sm sm:text-sm">
              @error('password')
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
              @enderror
            </div>
            @error('password')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
          </div>

          <div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue">Create account</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
@endsection