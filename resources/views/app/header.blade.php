<nav class="bg-white shadow" x-data="{ mobileMenuOpen : false}">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 justify-between">
      <div class="flex">
        <div class="-ml-2 mr-2 flex items-center md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
                Icon when menu is closed.
  
                Heroicon name: outline/bars-3
  
                Menu open: "hidden", Menu closed: "block"
              -->
            <svg class="block h-6 w-6" :class="{ 'hidden' : mobileMenuOpen , 'block' : !mobileMenuOpen}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
                Icon when menu is open.
  
                Heroicon name: outline/x-mark
  
                Menu open: "block", Menu closed: "hidden"
              -->
            <svg class="hidden h-6 w-6" :class="{ 'block' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-shrink-0 items-center">
          <img class="block h-6 w-auto lg:hidden" src="{{ Storage::url('cruiselevel.png') }}" alt="Cruiselevel logo">
          <img class="hidden h-6 w-auto lg:block" src="{{ Storage::url('cruiselevel.png') }}" alt="Cruiselevel logo">
        </div>
        <div class="hidden md:ml-6 md:flex md:space-x-8">
          <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
          <a href="{{ route('index') }}"
            class="inline-flex items-center border-b-2 @if(request()->is('/')) border-indigo-500 text-gray-900 @else border-transparent text-gray-500 @endif px-1 pt-1 text-sm font-medium">Dashboard</a>
          <a href="{{ route('app.products') }}"
            class="inline-flex items-center border-b-2 @if(request()->is('products')) border-indigo-500 text-gray-900 @else border-transparent text-gray-500 @endif px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Products</a>
          <a href="{{ route('app.orders') }}"
            class="inline-flex items-center border-b-2 @if(request()->is('orders')) border-indigo-500 text-gray-900 @else border-transparent text-gray-500 @endif px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Orders</a>
        </div>
      </div>
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <a href="{{ route('app.orders.new') }}">
            <button type="button"
              class="relative inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <!-- Heroicon name: mini/plus -->
              <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
              </svg>
              <span>New Order</span>
            </button>
          </a>
        </div>
        <div class="hidden md:ml-4 md:flex md:flex-shrink-0 md:items-center">

          <!-- Profile dropdown -->
          <div class="relative ml-3">
            <div>
              <button type="button" class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full"
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt="">
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="lg:hidden" id="mobile-menu" :class="{'' : mobileMenuOpen, 'hidden' : !mobileMenuOpen}">
      <div class="space-y-1 pt-2 pb-3">
        <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
        <a href="{{ route('index') }}"
          class="block border-l-4 @if(request()->is('/')) border-indigo-500 bg-indigo-50 text-indigo-700 @else border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 @endif py-2 pl-3 pr-4 text-base font-medium sm:pl-5 sm:pr-6">Dashboard</a>
        <a href="{{ route('app.products') }}"
          class="block border-l-4 @if(request()->is('products')) border-indigo-500 bg-indigo-50 text-indigo-700 @else border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 @endif py-2 pl-3 pr-4 text-base font-medium sm:pl-5 sm:pr-6">Products</a>
        <a href="{{ route('app.orders') }}"
          class="block border-l-4 @if(request()->is('orders')) border-indigo-500 bg-indigo-50 text-indigo-700 @else border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 @endif py-2 pl-3 pr-4 text-base font-medium sm:pl-5 sm:pr-6">Orders</a>
      </div>
      <div class="border-t border-gray-200 pt-4 pb-3">
        <div class="flex items-center px-4 sm:px-6">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full"
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
              alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium text-gray-800">{{ auth()->user()->name }}</div>
            <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
          </div>
        </div>
        <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">
          <a href="{{ route('logout') }}" class="block rounded-md py-2 px-3 text-base font-medium text-blue">Uitloggen</a>
        </div>
      </div>
    </div>
</nav>