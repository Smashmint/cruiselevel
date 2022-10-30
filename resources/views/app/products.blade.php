@extends('app.app')

@section('content')

<main>
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8 mb-16">
        <div class="py-16 text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
            <p class="mx-auto mt-4 max-w-3xl text-base text-gray-500">Thoughtfully designed objects for the workspace, home, and travel.</p>
        </div>

        <!-- Product grid -->
        <section aria-labelledby="products-heading" class="mt-8">
            <h2 id="products-heading" class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                <!-- product -->
                <a href="{{ route('products.webcam') }}" class="group">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg sm:aspect-w-4 sm:aspect-h-4">
                        <img src="https://resource.logitech.com/w_1600,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/webcams/streamcam/gallery/streamcam-gallery-4-graphite.png"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Logitech Stream Cam</h3>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Full HD 1080P, 60 FPS</p>
                </a>

                <!-- product -->
                <a href="{{ route('products.monitor-1') }}" class="group">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg sm:aspect-w-4 sm:aspect-h-4">
                        <img src="https://www.lg.com/nl/images/monitor/md07554693/Features/mnt-dualup-ergo-28mq780-01-2-lg-dualup-monitor-ergo-mobile.jpg"
                            alt="Paper card sitting upright in walnut card holder on desk."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>LG DualUp 28" Monitor</h3>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">2560x2880, 90W USB-C Power Delivery</p>
                </a>

                <!-- product -->
                <a href="{{ route('products.monitor-2') }}" class="group">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg sm:aspect-w-4 sm:aspect-h-4">
                        <img src="https://www.bhphotovideo.com/images/images1500x1500/dell_u2520d_25_ultrasharp_ips_usb_c_led_monitor_1579489.jpg"
                            alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Dell Ultrasharp 25" Monitor</h3>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">2560x1440, 90W USB-C Power Delivery</p>
                </a>

                <!-- product -->
                <a href="{{ route('products.headset-1') }}" class="group">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg sm:aspect-w-4 sm:aspect-h-4">
                        <img src="https://cdn0.vox-cdn.com/hermano/verge/product/image/9938/DSCF8639-2.jpg"
                            alt="Sennheiser Momentum 4"
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Sennheiser Momentum 4</h3>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Wireless headset with active noise cancellation (ANC)
                    </p>
                </a>

                <!-- product -->
                <a href="{{ route('products.headset-2') }}" class="group">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg sm:aspect-w-4 sm:aspect-h-4">
                        <img src="https://johnlewis.scene7.com/is/image/JohnLewis/238906544?$rsp-pdp-port-640$"
                            alt="Sony WH-1000XM4"
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Sony WH-1000XM4</h3>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Wireless headset with active noise cancellation (ANC)

                    </p>
                </a>

                <!-- product -->
                <a href="{{ route('products.headset-3') }}" class="group">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg sm:aspect-w-4 sm:aspect-h-4">
                        <img src="https://d33p2k2w4zpozf.cloudfront.net/media/catalog/product/cache/4832662449f27945c40903385bb67a42/w/e/web-pic_mmx300-facelift2016_16-11_perspective_v1_1.jpg"
                            alt="Beyerdynamic MMX 300"
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Beyerdynamic MMX 300</h3>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Unbreakable wired headset with suberb microphone</p>
                </a>
            </div>
        </section>
    </div>
</main>
@endsection