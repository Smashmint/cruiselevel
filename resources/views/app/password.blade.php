@extends('app.app')

@section('content')
<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">

    @include('app.side-menu')

    <!-- Payment details -->
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
      <section aria-labelledby="payment-details-heading">
        <form action="{{ route('app.password.update') }}" method="POST">
            @csrf()

          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-white py-6 px-4 sm:p-6">
              <div>
                <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Password</h2>
                <p class="mt-1 text-sm text-gray-500">Change your account password.</p>
              </div>

             
              <div class="mt-6 grid grid-cols-2 gap-6">
                <div class="col-span-2 md:col-span-1">
                  <label class="block text-sm font-medium text-gray-700">New password</label>
                  <div class="mt-1 relative">
                    <input type="password" name="password" id="password" class="mt-1 block w-full border @error('password') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
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

                <div class="col-span-1"></div>

                <div class="col-span-2 md:col-span-1">
                    <label class="block text-sm font-medium text-gray-700">Confirm new password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                </div>
              </div>

            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white bg-blue">Change password</button>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
@endsection