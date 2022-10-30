@extends('app.app')

@section('content')

<div class="bg-white">
    <main class="mx-auto px-4 pt-14 pb-24 sm:px-6 sm:pt-16 sm:pb-32 lg:max-w-7xl lg:px-8">
        <!-- Product -->
        <div class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
            <!-- Product image -->
            <div class="lg:col-span-4 lg:row-end-1">
                <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg bg-gray-100">
                    <img src="https://johnlewis.scene7.com/is/image/JohnLewis/238906544?$rsp-pdp-port-640$"
                        alt="Sony WH-1000XM4" class="object-cover object-center">
                </div>
            </div>

            <!-- Product details -->
            <div class="mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none">
                <div class="flex flex-col-reverse">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Sony WH-1000XM4</h1>

                </div>

                <p class="mt-6 text-gray-500">The Application UI Icon Pack comes with over 200 icons in 3 styles: outline, filled, and branded. This playful
                    icon pack is tailored for complex application user interfaces with a friendly and legible look.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
                    <button type="button"
                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Pay
                        €9.26/month</button>
                </div>
                
                <div class="mt-8 border-t border-gray-200 pt-8">
                    <h2 class="text-sm font-medium text-gray-900">Specifications</h2>
                    <div class="prose prose-sm mt-4 text-gray-500">
                        <ul role="list">
                            <li>Headphones with active noice cancellation (ANC)</li>

                            <li>Wireless Bluetooth 5.0 connection</li>

                            <li>30 hours battery life, fully charged in 3 hours</li>

                            <li>Built-in microphones</li>
                        </ul>
                    </div>
                </div>

                <section class="mt-12">
                    <div class="divide-y divide-gray-200 border-t">
                        <div>
                            <h3>
                                <!-- Expand/collapse question button -->
                                <button type="button" class="group relative flex w-full items-center justify-between py-6 text-left"
                                    aria-controls="disclosure-1" aria-expanded="false">
                                    <!-- Open: "text-indigo-600", Closed: "text-gray-900" -->
                                    <span class="text-gray-900 text-sm font-medium">What's in the box</span>
                                    <span class="ml-6 flex items-center">
                                        <!--
                            Heroicon name: outline/plus
    
                            Open: "hidden", Closed: "block"
                          -->
                                        <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                        <!--
                            Heroicon name: outline/minus
    
                            Open: "block", Closed: "hidden"
                          -->
                                        <svg class="hidden h-6 w-6 text-indigo-400 group-hover:text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="prose prose-sm pb-6" id="disclosure-1">
                                <ul role="list">
                                    <li>Sony WH-1000XM4</li>
                                    <li>Carry case</li>
                                    <li>1.2m Audio cable 3.5mm</li>
                                    <li>20cm USB-C charging cable</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-10">
                    <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                        <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                            <dt>
                                <!-- Heroicon name: outline/globe-americas -->
                                <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                </svg>
                                <span class="mt-4 text-sm font-medium text-gray-900">Fast delivery</span>
                            </dt>
                            <dd class="mt-1 text-sm text-gray-500">Get your order in 2-3 working days</dd>
                        </div>

                        <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                            <dt>
                                <!-- Heroicon name: outline/currency-dollar -->
                                <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="mt-4 text-sm font-medium text-gray-900">Loyalty rewards</span>
                            </dt>
                            <dd class="mt-1 text-sm text-gray-500">Don&#039;t look at other tees</dd>
                        </div>
                    </dl>
                </section>
            </div>
        </div>
    </main>
</div>
@endsection