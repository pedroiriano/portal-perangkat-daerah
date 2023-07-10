@extends('layouts.landing')

@section('content')
@inject('Carbon', 'Carbon\Carbon')
<!-- Start Hero -->
<section class="relative table w-full py-36 overflow-hidden bg-gradient-to-b to-transparent from-indigo-600/20 dark:from-indigo-600/40">
    <div class="container">
        <div class="relative grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-6">
                <div class="md:mr-8">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-black dark:text-white relative">
                        Perangkat Daerah Kota Depok
                    </h4>
                    <p class="text-slate-400 text-lg max-w-xl">
                        Website Resmi Perangkat Daerah Kota Depok. Semua informasi mengenai Sistem Layanan yang difasilitasi oleh Perangkat Daerah Kota Depok tersedia di sini.
                    </p>
                </div>
            </div><!--end col-->

            <div class="md:col-span-6">
                <div class="relative">
                    <div class="relative rounded-xl overflow-hidden shadow-md dark:shadow-gray-800">
                        <div class="w-full py-72 bg-slate-400 bg-no-repeat bg-top" data-jarallax='{"speed": 0.1}' style="background-image: url({{ asset('assets/images/saas/home.jpg') }}); background-size: cover;"></div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start Widget -->
<section class="relative py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="flex">
                <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-calendar-alt"></i>
                </div>
                <div class="content ml-6">
                    <p id="date" class="text-lg font-medium hover:text-indigo-600">
                        {{-- Full Date Function --}}
                    </p>
                    <p id="day" class="text-slate-400 mt-1">
                        {{-- Day Name Function --}}
                    </p>
                </div>
            </div>
            <!--end feature content-->

            <div class="flex">
                <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-compass"></i>
                </div>
                <div class="content ml-6">
                    <p id="clock" class="text-lg font-medium hover:text-indigo-600">
                        {{-- Live Clock Function --}}
                    </p>
                    <p class="text-slate-400 mt-1">
                        {{ $prayerName }} - {{ $pt }}
                    </p>
                </div>
            </div>
            <!--end feature content-->

            <div class="flex">
                <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-cloud-sun"></i>
                </div>
                <div class="content ml-6">
                    <p class="text-lg font-medium hover:text-indigo-600">
                        Cuaca Hari Ini
                    </p>
                    <p id="desc-weather" class="text-slate-400 mt-1">
                        Berawan
                    </p>
                </div>
            </div>
            <!--end feature content-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Widget -->

<!-- Start Service & Information -->
<section class="relative md:py-24 py-16">
    <div class="grid grid-cols-1 mt-8">
        <ul class="md:w-fit w-full mx-auto flex-wrap justify-center text-center p-3 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
                <button class="px-6 py-2 font-semibold rounded-md w-full hover:text-indigo-600 transition-all duration-500 ease-in-out" id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="true">
                    Layanan
                </button>
            </li>
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
                <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="informations-tab" data-tabs-target="#informations" type="button" role="tab" aria-controls="informations" aria-selected="false">
                    Informasi
                </button>
            </li>
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
                <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="local-news-tab" data-tabs-target="#local-news" type="button" role="tab" aria-controls="local-news" aria-selected="false">
                    Berita
                </button>
            </li>
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
                <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="local-announcements-tab" data-tabs-target="#local-announcements" type="button" role="tab" aria-controls="local-announcements" aria-selected="false">
                    Pengumuman
                </button>
            </li>
        </ul>

        <div id="StarterContent" class="mt-1">
            <div class="" id="services" role="tabpanel" aria-labelledby="services-tab">
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
                                        <a href="service.html" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
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

            <div class="hidden" id="informations" role="tabpanel" aria-labelledby="informations-tab">
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
                                        <a href="product-document.html" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
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
                                        <a href="featured-program.html" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
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
                                        <a href="innovation.html" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
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
                                        <a href="agenda.html" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
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

            <div class="hidden" id="local-news" role="tabpanel" aria-labelledby="local-news-tab">
                <div class="grid grid-cols-1">
                    <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                        <div class="container">
                            <div class="grid lg:grid-cols-2 grid-cols-1 items-center mt-8 gap-4">
                                <!-- Start Latest News -->
                                @if (!empty($latestNews))
                                    @foreach ($latestNews as $latestNew)
                                        <div class="group relative overflow-hidden rounded-md md:flex hidden">
                                            @if (!empty($latestNew['lampiran']))
                                                <img loading="lazy" src="https://cms.depok.go.id/upload/{{ $latestNew['lampiran'] }}" class="group-hover:scale-105 duration-500 ease-in-out w-full" alt="News">
                                            @else
                                                <img loading="lazy" src="{{ asset('assets/images/page/news.jpg') }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="News">
                                            @endif
                                            <div class="absolute inset-0 bg-gradient-to-b to-slate-900 via-slate-900/50 from-transparent opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                            <div class="absolute bottom-0 left-0 right-0 p-6 -mb-96 group-hover:mb-0 duration-500 ease-in-out">
                                                <div class="text-center">
                                                    <a class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                                                        Berita
                                                    </a>
                                                    <a href="/berita/detail/{{ $latestNew['slug_title'] }}" class="text-white font-semibold hover:text-indigo-600 block text-lg mt-4 duration-500 ease-in-out">
                                                        {{ $latestNew['title'] }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    Koneksi API Terputus
                                @endif
                                <!-- End Latest News -->

                                <div>
                                    <div class="grid grid-cols-1 gap-4">
                                        <!-- Start Latest News -->
                                        @if (!empty($latestNews))
                                            @foreach ($latestNews as $latestNew)
                                                <div class="group items-center relative overflow-hidden md:hidden">
                                                    @php
                                                        $publishDate = $Carbon::parse($latestNew['tgl_publish']);
                                                        $publishDate = $publishDate->format('d-m-Y');
                                                    @endphp
                                                    <div class="md:w-[40%] relative overflow-hidden rounded-md">
                                                        @if (!empty($latestNew['lampiran']))
                                                            <img loading="lazy" src="https://cms.depok.go.id/upload/{{ $latestNew['lampiran'] }}" class="group-hover:scale-105 duration-500 ease-in-out w-full" alt="News">
                                                        @else
                                                            <img loading="lazy" src="{{ asset('assets/images/page/news.jpg') }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="News">
                                                        @endif
                                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                                    </div>
                                                    <div class="md:w-[60%] md:pl-4 pt-4 md:pt-0">
                                                        <a class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                                                            Berita
                                                        </a>
                                                        <a href="/berita/detail/{{ $latestNew['slug_title'] }}" class="block hover:text-indigo-600 text-lg font-semibold mt-3">
                                                            {{ $latestNew['title'] }}
                                                        </a>
                                                        <span class="text-slate-400 block mt-3">
                                                            <i class="uil uil-calendar-alt"></i> {{ $publishDate }}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            Koneksi API Terputus
                                        @endif
                                        <!-- End Latest News -->

                                        <!-- Start News -->
                                        @if (!empty($news))
                                            @foreach ($news as $new)
                                                <div class="group md:flex items-center relative overflow-hidden">
                                                    @php
                                                        $publishDate = $Carbon::parse($new['tgl_publish']);
                                                        $publishDate = $publishDate->format('d-m-Y');
                                                    @endphp
                                                    <div class="md:w-[40%] relative overflow-hidden rounded-md">
                                                        @if (!empty($new['lampiran']))
                                                            <img loading="lazy" src="https://cms.depok.go.id/upload/{{ $new['lampiran'] }}" class="group-hover:scale-105 duration-500 ease-in-out w-full" alt="News">
                                                        @else
                                                            <img loading="lazy" src="{{ asset('assets/images/page/news.jpg') }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="News">
                                                        @endif
                                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                                    </div>
                                                    <div class="md:w-[60%] md:pl-4 pt-4 md:pt-0">
                                                        <a class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                                                            Berita
                                                        </a>
                                                        <a href="/berita/detail/{{ $new['slug_title'] }}" class="block hover:text-indigo-600 text-lg font-semibold mt-3">
                                                            {{ $new['title'] }}
                                                        </a>
                                                        <span class="text-slate-400 block mt-3">
                                                            <i class="uil uil-calendar-alt"></i> {{ $publishDate }}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            Koneksi API Terputus
                                        @endif
                                        <!-- End News -->
                                    </div>
                                </div>
                            </div>
                        </div><!--end container-->
                    </div>
                </div>
            </div>

            <div class="hidden" id="local-announcements" role="tabpanel" aria-labelledby="local-announcements-tab">
                <div class="grid grid-cols-1">
                    <div class="relative p-1 overflow-x-auto block w-full bg-white dark:bg-slate-900">
                        <div class="container">
                            <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                                @if (!empty($announcements))
                                    @php
                                        $count = 0;
                                    @endphp
                                    @foreach ($announcements as $announcement)
                                        <div class="flex items-center">
                                            <img loading="lazy" src="https://cms.depok.go.id/upload/{{ $announcement['lampiran'] }}" class="md:h-28 h-20 rounded-md shadow dark:shadow-gray-800" alt="Announcement">
                                            <div class="ml-3">
                                                <a href="/pengumuman/detail/{{ $announcement['slug_title'] }}" class="font-semibold hover:text-indigo-600">
                                                    {{ $announcement['title'] }}
                                                </a>
                                                <p class="text-sm text-slate-400 mt-1">
                                                    {!! $announcement['content'] !!}
                                                </p>
                                            </div>
                                        </div>
                                        @php
                                            $count++;
                                        @endphp
                                        @if ($count == 6)
                                            @break
                                        @endif
                                    @endforeach
                                @else
                                    Koneksi API Terputus
                                @endif
                            </div>
                        </div><!--end container-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Service & Information -->

<!-- Start City News -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-left text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                    Berita dan Pengumuman Pemerintah Kota Depok
                </h3>
                <p class="text-slate-400 max-w-xl">
                    Dapatkan informasi seputar Pemerintah Kota Depok yang Anda perlukan di sini.
                </p>
            </div>
            <div class="lg:col-span-4 md:col-span-6 md:text-right hidden md:block">
                <a href="https://berita.depok.go.id/" class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">
                    Semua Berita <i class="uil uil-arrow-right align-middle"></i>
                </a>
            </div>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 gap-[30px]">
                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                        <div class="lg:flex relative">
                            <div class="relative md:shrink-0">
                                <img class="h-full w-full object-cover lg:w-52 lg:h-56" src="{{ asset('assets/images/blog/02.jpg') }}" alt="">
                            </div>
                            <div class="p-6 flex flex-col lg:h-56 justify-center">
                                <a href="https://berita.depok.go.id/" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                    Berita 001
                                </a>
                                <div class="my-auto">
                                    <p class="text-slate-400 mt-3">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci deserunt dolores, porro libero temporibus delectus.
                                    </p>
                                </div>
                                <div class="mt-4">
                                    <a href="https://berita.depok.go.id/" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">
                                        Selengkapnya <i class="uil uil-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                        <div class="lg:flex relative">
                            <div class="relative md:shrink-0">
                                <img class="h-full w-full object-cover lg:w-52 lg:h-56" src="{{ asset('assets/images/blog/03.jpg') }}" alt="">
                            </div>
                            <div class="p-6 flex flex-col lg:h-56 justify-center">
                                <a href="https://berita.depok.go.id/" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                    Berita 002
                                </a>
                                <div class="my-auto">
                                    <p class="text-slate-400 mt-3">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fuga nobis quae mollitia praesentium hic.
                                    </p>
                                </div>
                                <div class="mt-4">
                                    <a href="https://berita.depok.go.id/" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">
                                        Selengkapnya <i class="uil uil-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                        <div class="lg:flex relative">
                            <div class="relative md:shrink-0">
                                <img class="h-full w-full object-cover lg:w-52 lg:h-56" src="{{ asset('assets/images/blog/04.jpg') }}" alt="">
                            </div>
                            <div class="p-6 flex flex-col lg:h-56 justify-center">
                                <a href="https://berita.depok.go.id/" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                    Berita 003
                                </a>
                                <div class="my-auto">
                                    <p class="text-slate-400 mt-3">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore minima impedit, minus quas alias aut.
                                    </p>
                                </div>
                                <div class="mt-4">
                                    <a href="https://berita.depok.go.id/" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">
                                        Selengkapnya <i class="uil uil-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">
                        Pengumuman
                    </h5>
                    <div class="flex items-center mt-8">
                        <img src="{{ asset('assets/images/blog/06.jpg') }}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">
                        <div class="ml-3">
                            <a href="https://depok.go.id/" class="font-semibold hover:text-indigo-600">
                                Pengumuman 001
                            </a>
                            <p class="text-sm text-slate-400">
                                <script>
                                    var currentDate = new Date();
                                    var options = { year: 'numeric', month: 'long', day: 'numeric' };
                                    var fullDate = currentDate.toLocaleDateString('id-ID', options);
                                    document.write(fullDate);
                                </script>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center mt-4">
                        <img src="{{ asset('assets/images/blog/07.jpg') }}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">
                        <div class="ml-3">
                            <a href="https://depok.go.id/" class="font-semibold hover:text-indigo-600">
                                Pengumuman 002
                            </a>
                            <p class="text-sm text-slate-400">
                                <script>
                                    var currentDate = new Date();
                                    var options = { year: 'numeric', month: 'long', day: 'numeric' };
                                    var fullDate = currentDate.toLocaleDateString('id-ID', options);
                                    document.write(fullDate);
                                </script>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center mt-4">
                        <img src="{{ asset('assets/images/blog/08.jpg') }}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">
                        <div class="ml-3">
                            <a href="https://depok.go.id/" class="font-semibold hover:text-indigo-600">
                                Pengumuman 003
                            </a>
                            <p class="text-sm text-slate-400">
                                <script>
                                    var currentDate = new Date();
                                    var options = { year: 'numeric', month: 'long', day: 'numeric' };
                                    var fullDate = currentDate.toLocaleDateString('id-ID', options);
                                    document.write(fullDate);
                                </script>
                            </p>
                        </div>
                    </div>

                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Media Sosial
                    </h5>
                    <ul class="list-none text-center mt-8">
                        <li class="inline">
                            <a href="https://www.facebook.com/PemerintahKotaDepok" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600" target="_blank">
                                <i data-feather="facebook" class="h-4 w-4"></i>
                            </a>
                        </li>
                        <li class="inline">
                            <a href="https://www.instagram.com/pemkotdepok" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600" target="_blank">
                                <i data-feather="instagram" class="h-4 w-4"></i>
                            </a>
                        </li>
                        <li class="inline">
                            <a href="https://twitter.com/pemkotdepok" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600" target="_blank">
                                <i data-feather="twitter" class="h-4 w-4"></i>
                            </a>
                        </li>
                        <li class="inline">
                            <a href="https://www.youtube.com/@kominfodepok" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600" target="_blank">
                                <i data-feather="youtube" class="h-4 w-4"></i>
                            </a>
                        </li>
                    </ul><!--end icon-->
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End City News -->

<!-- Start External Link -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                Link Terkait
            </h3>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-2 md:mt-6 relative">
            <div class="tiny-five-item">
                <!-- Slide -->
                <div class="tiny-slide">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                        <div class="py-10 bg-gradient-to-r to-orange-600/70 from-indigo-600/70"></div>
                        <div class="p-6 pt-0 -mt-10 text-center">
                            <a href="">
                                <img src="{{ asset('assets/images/client/01.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide -->

                <!-- Slide -->
                <div class="tiny-slide">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                        <div class="py-10 bg-gradient-to-r to-red-600/70 from-indigo-600/70"></div>
                        <div class="p-6 pt-0 -mt-10 text-center">
                            <a href="">
                                <img src="{{ asset('assets/images/client/02.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide -->

                <!-- Slide -->
                <div class="tiny-slide">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                        <div class="py-10 bg-gradient-to-r to-fuchsia-600/70 from-green-600/70"></div>
                        <div class="p-6 pt-0 -mt-10 text-center">
                            <a href="">
                                <img src="{{ asset('assets/images/client/03.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide -->

                <!-- Slide -->
                <div class="tiny-slide">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                        <div class="py-10 bg-gradient-to-r to-pink-600/70 from-purple-600/70"></div>
                        <div class="p-6 pt-0 -mt-10 text-center">
                            <a href="">
                                <img src="{{ asset('assets/images/client/04.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide -->

                <!-- Slide -->
                <div class="tiny-slide">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                        <div class="py-10 bg-gradient-to-r to-violet-600/70 from-blue-600/70"></div>
                        <div class="p-6 pt-0 -mt-10 text-center">
                            <a href="">
                                <img src="{{ asset('assets/images/client/05.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide -->

                <!-- Slide -->
                <div class="tiny-slide">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                        <div class="py-10 bg-gradient-to-r to-orange-600/70 from-indigo-600/70"></div>
                        <div class="p-6 pt-0 -mt-10 text-center">
                            <a href="">
                                <img src="{{ asset('assets/images/client/06.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide -->

                <!-- Slide -->
                <div class="tiny-slide">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                        <div class="py-10 bg-gradient-to-r to-sky-600/70 from-yellow-600/70"></div>
                        <div class="p-6 pt-0 -mt-10 text-center">
                            <a href="">
                                <img src="{{ asset('assets/images/client/07.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide -->

                <!-- Slide -->
                <div class="tiny-slide">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                        <div class="py-10 bg-gradient-to-r to-lime-600/70 from-rose-600/70"></div>
                        <div class="p-6 pt-0 -mt-10 text-center">
                            <a href="">
                                <img src="{{ asset('assets/images/client/08.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
            </div>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden">
            <div class="md:col-span-12 text-center">
                <a href="nft-creators.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End External Link -->
@endsection

@push('js')
{{-- BEGIN::Live Clock JS --}}
<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s + " WIB";
        var dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
        var dayOptions = { weekday: 'long' };
        var fullDate = currentDate.toLocaleDateString('id-ID', dateOptions);
        var day = currentDate.toLocaleDateString('id-ID', dayOptions);
        document.getElementById('date').innerHTML =  fullDate;
        document.getElementById('day').innerHTML =  day;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
</script>
{{-- END::Live Clock JS --}}
@endpush
