<aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
    <nav class="space-y-1">
      <!-- Current: "bg-gray-50 text-orange-600 hover:bg-white", Default: "text-gray-900 hover:text-gray-900 hover:bg-gray-50" -->
      <a href="{{ route('app.profile') }}" class="@if(request()->is('profile')) bg-gray-50 text-blue hover:text-gray-900 hover:bg-white @else text-gray-900 hover:text-gray-900 @endif hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
        <!-- Heroicon name: outline/user -->
        <svg class="@if(request()->is('profile')) text-blue @else text-gray-400 @endif group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
        <span class="truncate"> Profile </span>
      </a>

      <a href="{{ route('app.password') }}" class="@if(request()->is('password')) bg-gray-50 text-blue hover:text-gray-900 hover:bg-white @else text-gray-900 hover:text-gray-900 @endif hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
        <!-- Heroicon name: outline/key -->
        <svg class="@if(request()->is('password')) text-blue @else text-gray-400 @endif group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
        </svg>
        <span class="truncate"> Password </span>
      </a>

      
      <a href="{{ route('app.orders') }}" class="@if(request()->is('orders')) bg-gray-50 text-blue hover:text-gray-900 hover:bg-white @else text-gray-900 hover:text-gray-900 @endif hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
        <!-- Heroicon name: outline/list -->
        <svg class="@if(request()->is('orders')) text-blue @else text-gray-400 @endif group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
        </svg>
        <span class="truncate"> Orders </span>
      </a>
    </nav>
  </aside>