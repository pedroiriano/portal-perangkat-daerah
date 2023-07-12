@extends('layouts.page')

@section('content')
@inject('Carbon', 'Carbon\Carbon')
<!-- Start Hero -->
<section class="relative table w-full py-40 lg:py-64 bg-no-repeat bg-center" data-jarallax='{"speed": 0.1}' style="background-image: url({{ asset('assets/images/pages-header.png') }}); background-size: cover;">
    <div class="absolute inset-0 bg-black opacity-75"></div>
</section>
<div class="relative">
    <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container">
        <div class="md:flex">
            <div class="relative lg:w-2/3 w-full -mt-32">
                <div class="px-6 py-12 bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 text-center">
                    <a href="" class="bg-indigo-600/10 text-indigo-600 font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                        Informasi
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Program Unggulan
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 mt-8">
                    <ul class="md:w-fit w-full mx-auto flex-wrap justify-center text-center p-3 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                        <li role="presentation" class="md:inline-block block md:w-fit w-full">
                            <button class="px-6 py-2 font-semibold rounded-md w-full hover:text-indigo-600 transition-all duration-500 ease-in-out" id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">
                                Umum
                            </button>
                        </li>
                        <li role="presentation" class="md:inline-block block md:w-fit w-full">
                            <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="private-tab" data-tabs-target="#private" type="button" role="tab" aria-controls="private" aria-selected="false">
                                Khusus
                            </button>
                        </li>
                    </ul>

                    <div id="StarterContent" class="mt-1">
                        <div class="" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <div class="grid grid-cols-1">
                                <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                                    <div class="container">
                                        <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                                            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                                                <div class="relative overflow-hidden text-transparent -m-3">
                                                    <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10 mx-auto"></i>
                                                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                                        <i class="uil uil-university"></i>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="https://depok.go.id/" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out" target="_blank">
                                                        Layanan DSW
                                                    </a>
                                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                                        Layanan Pemerintah Kota Depok.
                                                    </p>
                                                </div>
                                            </div><!--end feature-->

                                            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                                                <div class="relative overflow-hidden text-transparent -m-3">
                                                    <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10 mx-auto"></i>
                                                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                                        <i class="uil uil-building"></i>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="{{ route('service') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                                        Layanan Perangkat Daerah
                                                    </a>
                                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                                        Layanan yang diberikan oleh Perangkat Daerah.
                                                    </p>
                                                </div>
                                            </div><!--end feature-->
                                        </div>
                                    </div><!--end container-->
                                </div>
                            </div>
                        </div>

                        <div class="hidden" id="private" role="tabpanel" aria-labelledby="private-tab">
                            <div class="grid grid-cols-1">
                                <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                                    <div class="container">
                                        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                                            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                                                <div class="relative overflow-hidden text-transparent -m-3">
                                                    <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10"></i>
                                                    <div class="absolute top-2/4 -translate-y-2/4 left-8 text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                                        <i class="uil uil-books"></i>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="{{ route('product') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                                        Dokumen Produk
                                                    </a>
                                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.
                                                    </p>
                                                </div>
                                            </div><!--end feature-->

                                            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                                                <div class="relative overflow-hidden text-transparent -m-3">
                                                    <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10"></i>
                                                    <div class="absolute top-2/4 -translate-y-2/4 left-8 text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                                        <i class="uil uil-analysis"></i>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="{{ route('featured') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                                        Program Unggulan
                                                    </a>
                                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem!
                                                    </p>
                                                </div>
                                            </div><!--end feature-->

                                            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                                                <div class="relative overflow-hidden text-transparent -m-3">
                                                    <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10"></i>
                                                    <div class="absolute top-2/4 -translate-y-2/4 left-8 text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                                        <i class="uil uil-brain"></i>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="{{ route('innovation') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                                        Inovasi
                                                    </a>
                                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Crum.
                                                    </p>
                                                </div>
                                            </div><!--end feature-->

                                            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                                                <div class="relative overflow-hidden text-transparent -m-3">
                                                    <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10"></i>
                                                    <div class="absolute top-2/4 -translate-y-2/4 left-8 text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                                        <i class="uil uil-calendar-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="{{ route('agenda') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                                        Agenda
                                                    </a>
                                                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non?
                                                    </p>
                                                </div>
                                            </div><!--end feature-->
                                        </div>
                                    </div><!--end container-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Informasi</h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="/informasi/produk" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Dokumen Produk
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/informasi/program-unggulan" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Program Unggulan
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/informasi/inovasi" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Inovasi
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/informasi/agenda" class="font-semibold hover:text-indigo-600" aria-selected="true">
                                Agenda
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->
@endsection
