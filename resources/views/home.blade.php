@extends('layouts.app')

@section('contents')
    <!-- Hero -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
            <div class="order-2 md:order-1">
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight">
                    Menabung Hewan Qurban Lebih Mudah di <span class="text-blue-600">Purbalingga Farm</span></h1>
                <p class="mt-3 text-lg text-gray-800">Hand-picked professionals and expertly crafted components,
                    designed for any kind of entrepreneur.</p>

                <!-- Buttons -->
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        href="daftar">
                        Daftar Sekarang
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Buttons -->
            </div>
            <!-- End Col -->

            <div class="relative ms-4 order-1 md:order-2 mb-5 md:mb-0">
                <img class="w-full rounded-md"
                    src="https://images.unsplash.com/photo-1554755209-85e44182e019?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Image Description">
                <div
                    class="absolute inset-0 -z-[1] bg-gradient-to-tr from-blue-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6">
                </div>

                <!-- SVG-->
                <div class="absolute bottom-0 start-0">
                    <svg class="w-2/3 ms-auto h-auto text-blue-600" width="630" height="451" viewBox="0 0 630 451"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="531" y="352" width="99" height="99" fill="currentColor" />
                        <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                        <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                        <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                        <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                        <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                        <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                        <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                        <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                        <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                        <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                        <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                        <rect x="581" width="49" height="49" fill="currentColor" />
                        <rect x="581" width="49" height="64" fill="currentColor" />
                        <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                        <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                        <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                    </svg>
                </div>
                <!-- End SVG-->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Hero -->
    <!-- Story -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid md:grid-cols-5 gap-10">
            <div class="md:col-span-2">
                <div class="max-w-xs">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Kisah<br><span
                            class="text-blue-600">Purbalingga Farm</span></h2>
                </div>
            </div>
            <!-- End Col -->

            <div class="md:col-span-3">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ratione aut deserunt unde
                    rerum
                    harum adipisci voluptates hic, fugit asperiores necessitatibus, sint explicabo similique impedit
                    quod omnis ex perferendis! Voluptatum. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Praesentium ratione aut deserunt unde rerum harum adipisci voluptates hic, fugit asperiores
                    necessitatibus.
                </p>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
        <!-- Slider -->
        <div data-hs-carousel=
            '{
                "loadingClasses": "opacity-0",
                "isAutoPlay": true
            }'
            class="relative mt-10">
            <div class="hs-carousel relative overflow-hidden w-full md:min-h-96 min-h-48 bg-white rounded-lg">
                <div
                    class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                    <div class="hs-carousel-slide">
                        <img src="https://images.unsplash.com/photo-1542304361-9277de681652?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="hs-carousel-slide">
                        <img src="https://images.unsplash.com/photo-1542304361-9277de681652?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="hs-carousel-slide">
                        <img src="https://images.unsplash.com/photo-1542304361-9277de681652?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                </div>
            </div>

            <button type="button"
                class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg">
                <span class="text-2xl" aria-hidden="true">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button"
                class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg">
                <span class="sr-only">Next</span>
                <span class="text-2xl" aria-hidden="true">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </span>
            </button>
        </div>
        <!-- End Slider -->
    </div>
    <!-- End Story -->
    <!-- Icon Blocks -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Keunggulan</h2>
        </div>
        <!-- End Title -->

        <div class="grid mx-auto sm:grid-cols-2 lg:grid-cols-3 items-center gap-6 md:gap-10">
            <!-- Card -->
            <div class="size-full bg-white shadow-lg rounded-lg p-5">
                <div class="flex items-center gap-x-4 mb-3">
                    <div
                        class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100">
                        <svg class="flex-shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="13.5" cy="6.5" r=".5" />
                            <circle cx="17.5" cy="10.5" r=".5" />
                            <circle cx="8.5" cy="7.5" r=".5" />
                            <circle cx="6.5" cy="12.5" r=".5" />
                            <path
                                d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z" />
                        </svg>
                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800">Rencana Dana Qurban</h3>
                    </div>
                </div>
                <p class="text-gray-600">Dapat mempersiapkan dana Qurban lebih awal, ibadah Qurban terasa lebih ringan.
                </p>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="size-full bg-white shadow-lg rounded-lg p-5">
                <div class="flex items-center gap-x-4 mb-3">
                    <div
                        class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100">
                        <svg class="flex-shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7" />
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                            <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4" />
                            <path d="M2 7h20" />
                            <path
                                d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7" />
                        </svg>
                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800">Pemeliharaan Gratis</h3>
                    </div>
                </div>
                <p class="text-gray-600">Gratis biaya pemeliharaan.</p>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="size-full bg-white shadow-lg rounded-lg p-5">
                <div class="flex items-center gap-x-4 mb-3">
                    <div
                        class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100">
                        <svg class="flex-shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5.5 8.5 9 12l-3.5 3.5L2 12l3.5-3.5Z" />
                            <path d="m12 2 3.5 3.5L12 9 8.5 5.5 12 2Z" />
                            <path d="M18.5 8.5 22 12l-3.5 3.5L15 12l3.5-3.5Z" />
                            <path d="m12 15 3.5 3.5L12 22l-3.5-3.5L12 15Z" />
                        </svg>
                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800">Layanan Titip Salur</h3>
                    </div>
                </div>
                <p class="text-gray-600">Tersedia layanan titip salur ke daerah minim Qurban dengan memberikan
                    pelaporan kegiatan.</p>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="size-full bg-white shadow-lg rounded-lg p-5">
                <div class="flex items-center gap-x-4 mb-3">
                    <div
                        class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100">
                        <svg class="flex-shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M16.466 7.5C15.643 4.237 13.952 2 12 2 9.239 2 7 6.477 7 12s2.239 10 5 10c.342 0 .677-.069 1-.2" />
                            <path d="m15.194 13.707 3.814 1.86-1.86 3.814" />
                            <path
                                d="M19 15.57c-1.804.885-4.274 1.43-7 1.43-5.523 0-10-2.239-10-5s4.477-5 10-5c4.838 0 8.873 1.718 9.8 4" />
                        </svg>
                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800">Kualitas Hewan Terjamin</h3>
                    </div>
                </div>
                <p class="text-gray-600">Hewan Qurban dijamin jantan dan memenuhi syarat.</p>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="size-full bg-white shadow-lg rounded-lg p-5">
                <div class="flex items-center gap-x-4 mb-3">
                    <div
                        class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100">
                        <svg class="flex-shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z" />
                            <rect x="3" y="14" width="7" height="7" rx="1" />
                            <circle cx="17.5" cy="17.5" r="3.5" />
                        </svg>
                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800">Harga Terjangkau</h3>
                    </div>
                </div>
                <p class="text-gray-600">Pemesanan lebih awal harga hewan Qurban lebih terjangkau.</p>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="size-full bg-white shadow-lg rounded-lg p-5">
                <div class="flex items-center gap-x-4 mb-3">
                    <div
                        class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100">
                        <svg class="flex-shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M16.466 7.5C15.643 4.237 13.952 2 12 2 9.239 2 7 6.477 7 12s2.239 10 5 10c.342 0 .677-.069 1-.2" />
                            <path d="m15.194 13.707 3.814 1.86-1.86 3.814" />
                            <path
                                d="M19 15.57c-1.804.885-4.274 1.43-7 1.43-5.523 0-10-2.239-10-5s4.477-5 10-5c4.838 0 8.873 1.718 9.8 4" />
                        </svg>
                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800">Setoran Fleksibel</h3>
                    </div>
                </div>
                <p class="text-gray-600">Jumlah setoran tabungan dapat dipilih dengan menyesuaikan kemampuan keuangan.
                </p>
            </div>
            <!-- End Card -->
        </div>
    </div>
    <!-- End Icon Blocks -->
    <!-- Pricing -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Harga</h2>
            <p class="mt-1 text-gray-600">Whatever your status, our offers evolve according to your needs.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">
            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
                <h4 class="font-medium text-lg text-gray-800">Tipe A</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800">
                    <span class="font-bold text-2xl -me-2">Rp</span>
                    2,5 JT
                </span>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Kambing/domba Jantan
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Bobot 28-30 Kg
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Umur 3 tahun
                        </span>
                    </li>
                </ul>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8">
                <p class="mb-3">
                    <span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-blue-100 text-blue-800">Terpopuler</span>
                </p>
                <h4 class="font-medium text-lg text-gray-800">Tipe B</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800">
                    <span class="font-bold text-2xl -me-2">Rp</span>
                    2,8 JT
                </span>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Kambing/domba Jantan
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Bobot 31-34 Kg
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Umur 3 tahun
                        </span>
                    </li>
                </ul>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
                <h4 class="font-medium text-lg text-gray-800">Tipe C</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800">
                    <span class="font-bold text-2xl -me-2">Rp</span>
                    3,3 JT
                </span>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Kambing/domba Jantan
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Bobot 35-38 Kg
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Umur 3 tahun
                        </span>
                    </li>
                </ul>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
                <h4 class="font-medium text-lg text-gray-800">Tipe D</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800">
                    <span class="font-bold text-2xl -me-2">Rp</span>
                    3,7 JT
                </span>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Kambing/domba Jantan
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Bobot 39-41 Kg
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Umur 3 tahun
                        </span>
                    </li>
                </ul>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Pricing -->
    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="aspect-w-16 aspect-h-7">
            <img class="w-full object-cover rounded-xl"
                src="https://plus.unsplash.com/premium_photo-1661962510497-9505129083fa?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Image Description">
        </div>

        <!-- Grid -->
        <div class="mt-5 lg:mt-16 grid lg:grid-cols-3 gap-8 lg:gap-12">
            <div class="lg:col-span-1">
                <h2 class="font-bold text-2xl md:text-3xl text-gray-800">
                    We tackle the challenges start-ups face
                </h2>
                <p class="mt-2 md:mt-4 text-gray-500">
                    Besides working with start-up enterprises as a partner for digitalization, we have built enterprise
                    products for common pain points that we have encountered in various products and projects.
                </p>
            </div>
            <!-- End Col -->

            <div class="lg:col-span-2">
                <div class="grid sm:grid-cols-2 gap-8 md:gap-12">
                    <!-- Icon Block -->
                    <div class="flex gap-x-5">
                        <svg class="flex-shrink-0 mt-1 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="10" x="3" y="11" rx="2" />
                            <circle cx="12" cy="5" r="2" />
                            <path d="M12 7v4" />
                            <line x1="8" x2="8" y1="16" y2="16" />
                            <line x1="16" x2="16" y1="16" y2="16" />
                        </svg>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Creative minds
                            </h3>
                            <p class="mt-1 text-gray-600">
                                We choose our teams carefully. Our people are the secret to great work.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5">
                        <svg class="flex-shrink-0 mt-1 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 10v12" />
                            <path
                                d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z" />
                        </svg>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Simple and affordable
                            </h3>
                            <p class="mt-1 text-gray-600">
                                From boarding passes to movie tickets, there's pretty much nothing you can't store with
                                Preline.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5">
                        <svg class="flex-shrink-0 mt-1 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Industry-leading documentation
                            </h3>
                            <p class="mt-1 text-gray-600">
                                Our documentation and extensive Client libraries contain everything a business needs to
                                build a custom integration.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5">
                        <svg class="flex-shrink-0 mt-1 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Designing for people
                            </h3>
                            <p class="mt-1 text-gray-600">
                                We actively pursue the right balance between functionality and aesthetics, creating
                                delightful experiences.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->
@endsection
