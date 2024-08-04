@extends('layouts.app')

@section('contents')
    <!-- Hero -->
    <div>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight text-center">
                Formulir Tabungan Kurban Via <span class="text-blue-600"><br> Purbalingga Farm </span> 1446 H /2025 M
            </h1>
            <div class="mt-7 grid gap-3 w-full sm:inline-flex md:justify-center">
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="#daftar">
                    Daftar
                </a>
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    href="/">
                    Informasi
                </a>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <!-- Form -->
    @include('components.form')
    <!-- End Form -->
@endsection
