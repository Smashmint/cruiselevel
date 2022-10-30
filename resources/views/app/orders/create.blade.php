@extends('app.app')

@section('content')
<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
    <div class="space-y-6 sm:px-6 lg:col-span-9 lg:px-0">
        <form action="{{ route('app.orders.create') }}" method="POST">
            @csrf
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="bg-white py-6 px-4 sm:p-6">
                    <div>
                        <h2 id="payment-details-heading" class="text-lg font-medium leading-6 text-gray-900">Place a new order</h2>
                    </div>

                    <div class="mt-6 grid grid-cols-4 gap-6 pr-20">
                        <div class="col-span-4 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">First name</label>
                            <div class="mt-1 relative">
                                <input type="text" name="first_name" id="first_name"
                                    class="mt-1 block w-full border @error('first_name') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                @error('first_name')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>
                            @error('first_name')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
                        </div>

                        <div class="col-span-4 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Last name</label>
                            <div class="mt-1 relative">
                                <input type="text" name="last_name" id="last_name"
                                    class="mt-1 block w-full border @error('last_name') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                @error('last_name')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>
                            @error('last_name')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
                        </div>

                        <div class="col-span-4 sm:col-span-4">
                            <label class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1 relative">
                                <input type="text" name="address" id="address"
                                    class="mt-1 block w-full border @error('address') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                @error('address')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>
                            @error('address')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
                        </div>

                        <div class="col-span-2 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Postcode</label>
                            <div class="mt-1 relative">
                                <input type="text" name="postcode" id="postcode"
                                    class="mt-1 block w-full border @error('postcode') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                @error('postcode')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>
                            @error('postcode')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
                        </div>

                        <div class="col-span-2 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">City</label>
                            <div class="mt-1 relative">
                                <input type="text" name="city" id="city"
                                    class="mt-1 block w-full border @error('city') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                @error('city')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>
                            @error('city')<p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>@enderror
                        </div>

                        <div class="col-span-4 sm:col-span-4">
                            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                            <select id="country" name="country" autocomplete="country-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-gray-900 focus:outline-none focus:ring-gray-900 sm:text-sm">
                                <option>The Netherlands</option>
                                <option>Belgium</option>
                                <option>Germany</option>
                                <option>France</option>
                                <option>Spain</option>
                                <option>Portugal</option>
                                <option>Poland</option>
                                <option>Italy</option>
                                <option>Czechia</option>
                                <option>Croatia</option>
                                <option>Greece</option>
                                <option>Slovakia</option>
                                <option>Hungary</option>
                                <option>Estonia</option>
                                <option>Latvia</option>
                                <option>Lithuania</option>
                            </select>
                        </div>

                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-2">
                        <div class="col-span-1 sm:col-span-1 w-14">
                            <select id="country" name="country" autocomplete="country-name"
                                class="mt-6 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-gray-900 focus:outline-none focus:ring-gray-900 sm:text-sm">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-gray-800 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue">Place
                        order</button>
                </div>
            </div>
        </form>
        </section>
    </div>
    @endsection