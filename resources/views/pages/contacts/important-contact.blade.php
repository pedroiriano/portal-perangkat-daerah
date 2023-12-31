@extends('layouts.page')

@section('content')
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
                    <a class="bg-indigo-600/10 text-indigo-600 font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                        Kontak
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Kontak Penting
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                    @if (!empty($importantContacts))
                        @foreach ($importantContacts as $item)
                            <div class="lg:col-span-6 md:col-span-12">
                                <div class="team p-6 rounded-md border border-gray-100 dark:border-gray-700 group bg-white dark:bg-slate-900">
                                    <img loading="lazy" src="{{ asset('assets/images/client/01.jpg') }}" class="h-24 w-24 rounded-full shadow-md dark:shadow-gray-800" alt="Contact">
                                    <div class="content mt-4">
                                        <a class="text-lg font-medium hover:text-indigo-600 block">
                                            {{ $item['Name'] }}
                                        </a>
                                        <span class="text-slate-400 block">
                                            {{ $item['Jabatan'] }}
                                        </span>
                                        <a href="mailto:asn@depok.go.id" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">
                                            {{ $item['Email'] }}
                                        </a>
                                        <ul class="list-none mt-4">
                                            <li class="inline">
                                                <a href="{{ $item['Facebook'] }}" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white" target="_blank"><i data-feather="facebook" class="h-4 w-4"></i></a>
                                            </li>
                                            <li class="inline">
                                                <a href="{{ $item['Instagram'] }}" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white" target="_blank"><i data-feather="instagram" class="h-4 w-4"></i></a>
                                            </li>
                                            <li class="inline">
                                                <a href="tel:{{ $item['Mobile'] }}" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white" target="_blank"><i data-feather="phone" class="h-4 w-4"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Kontak
                    </h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="{{ route('important-contact') }}" class="font-semibold hover:text-indigo-600" aria-selected="true">
                                Kontak Penting
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="{{ route('contact-us') }}" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="https://www.lapor.go.id" class="font-semibold hover:text-indigo-600" aria-selected="false" target="_blank">
                                Lapor
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
