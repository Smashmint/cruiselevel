@extends('app.app')

@section('content')
<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">

    @include('app.side-menu')

    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <section aria-labelledby="billing-history-heading">
            <div class="bg-white pt-6 shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 sm:px-6">
                    <h2 id="billing-history-heading" class="text-lg leading-6 font-medium text-gray-900">Orders
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">An overview of all orders you have placed.</p>
                </div>
                <div class="mt-6 flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-t border-gray-200">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Items</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @if (count(auth()->user()->orders) >= 1)
                                        @foreach (auth()->user()->orders as $order)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ count($order->items) }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $order->status }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                <time>{{ $order->created_at->format('j F Y') }}</time>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">You haven't placed any orders yet.</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @endsection