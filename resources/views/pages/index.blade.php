@extends('layouts.landing')

@section('content')
@inject('Carbon', 'Carbon\Carbon')
<!-- Start Hero -->
<section class="swiper-slider-hero relative block h-screen" id="home">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @if (!empty($sliders))
                @foreach ($sliders as $slider)
                    <div class="swiper-slide flex items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image flex items-center bg-center bg-no-repeat" data-background="https://cms.depok.go.id/upload/slider/{{ $slider['File'] }}" style="background-size: contain">
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="container">
                                <div class="grid grid-cols-1">
                                    <div class="text-center">
                                        {!! $slider['Description'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="swiper-slide flex items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image flex items-center bg-center bg-no-repeat" data-background="{{ asset('assets/images/bg-app.png') }}" style="background-size: cover">
                        <div class="absolute inset-0 bg-black/70"></div>
                    </div>
                </div>
            @endif
        </div>

        <div class="swiper-button-next rounded-full text-center"></div>
        <div class="swiper-button-prev rounded-full text-center"></div>
    </div>
</section>
<!-- Hero End -->

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
        </div>
    </div>
</section>
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
                                </div>

                                <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                                    <div class="relative overflow-hidden text-transparent -m-3">
                                        <i data-feather="hexagon" class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10 mx-auto"></i>
                                        <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-indigo-600 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                            <i class="uil uil-building"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('service') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                            Layanan
                                        </a>
                                        <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                            Layanan yang diberikan oleh {{ $shortWorkUnits }}.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <a href="{{ route('product') }}" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">
                                            Dokumen Produk
                                        </a>
                                        <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                                            Dokumen yang berupa Produk Hukum, Sakip dan Lakip {{ $shortWorkUnits }}.
                                        </p>
                                    </div>
                                </div>

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
                                            Program yang dikembangkan oleh {{ $shortWorkUnits }} untuk mencapai keunggulan yang ingin dicapai.
                                        </p>
                                    </div>
                                </div>

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
                                            Sarana {{ $shortWorkUnits }} untuk mendorong terciptanya penyelenggaraan Pemerintahan dan pembangunan Masyarakat yang lebih produktif, efisien dan efektif.
                                        </p>
                                    </div>
                                </div>

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
                                            Jadwal Kegiatan {{ $shortWorkUnits }}.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <!-- Start Latest News on Mobile -->
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
                                        <!-- End Latest News on Mobile -->

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
                        </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                <a href="https://berita.depok.go.id/" class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out" target="_blank">
                    Semua Berita <i class="uil uil-arrow-right align-middle"></i>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 gap-[30px]">
                    @if (!empty($cityNews))
                    @php
                        $count = 0;
                    @endphp
                        @foreach ($cityNews as $cityNew)
                            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                                <div class="lg:flex relative">
                                    <div class="relative md:shrink-0">
                                        @if (!empty($cityNew['image']))
                                            <img loading="lazy" class="h-full w-full object-cover lg:w-52 lg:h-56" src="{{ $cityNew['image'] }}" alt="News">
                                        @else
                                            <img loading="lazy" class="h-full w-full object-cover lg:w-52 lg:h-56" src="{{ asset('assets/images/page/news.jpg') }}" alt="News">
                                        @endif
                                    </div>
                                    <div class="p-6 flex flex-col lg:h-56 justify-center">
                                        <a href="{{ $cityNew['link'] }}" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out" target="_blank">
                                            {{ $cityNew['title'] }}
                                        </a>
                                        <div class="my-auto">
                                            <p class="text-slate-400 mt-3">
                                                {!! $string_limit($cityNew['body'], 155) !!}
                                            </p>
                                        </div>
                                        <div class="mt-4">
                                            <a href="{{ $cityNew['link'] }}" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out" target="_blank">
                                                Selengkapnya <i class="uil uil-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $count++;
                            @endphp
                            @if ($count == 3)
                                @break
                            @endif
                        @endforeach
                    @else
                        Koneksi API Terputus
                    @endif
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">
                        Pengumuman
                    </h5>
                    @if (!empty($cityAnnouncements))
                    @php
                        $count = 0;
                    @endphp
                        @foreach ($cityAnnouncements as $cityAnnouncement)
                            <div class="flex items-center mt-8">
                                @php
                                    $cityAnnouncementDate = $Carbon::parse($cityAnnouncement['created_at']);
                                    $cityAnnouncementDate = $cityAnnouncementDate->format('d-m-Y');
                                @endphp
                                @if (!empty($cityAnnouncement['imageName']))
                                    <img loading="lazy" src="https://depok.go.id/storage/uploads/sliders/{{ $cityAnnouncement['imageName'] }}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="Announcement">
                                @else
                                    <img loading="lazy" src="{{ asset('assets/images/page/announcement.jpg') }}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="Announcement">
                                @endif
                                <div class="ml-3">
                                    <a href="https://depok.go.id/pengumuman/{{ $cityAnnouncement['url'] }}" class="font-semibold hover:text-indigo-600" target="_blank">
                                        {{ $cityAnnouncement['nama'] }}
                                    </a>
                                    <p class="text-sm text-slate-400">
                                        {{ $cityAnnouncementDate }}
                                    </p>
                                </div>
                            </div>
                            @php
                                $count++;
                            @endphp
                            @if ($count == 3)
                                @break
                            @endif
                        @endforeach
                    @else
                        Koneksi API Terputus
                    @endif

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
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End City News -->

<!-- Start External Link -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                Link Terkait
            </h3>
        </div>

        <div class="grid grid-cols-1 mt-2 md:mt-6 relative">
            <div class="tiny-five-item">
                <!-- Start Slide -->
                @if (!empty($externalLinks))
                    @php
                        $count = 0;
                    @endphp
                    @foreach ($externalLinks as $externalLink)
                        <div class="tiny-slide">
                            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out m-2 mb-5">
                                <div class="py-10 bg-gradient-to-r to-violet-600/70 from-indigo-600/70"></div>
                                <div class="p-6 pt-0 -mt-10 text-center">
                                    <a href="{{ $externalLink['URLMenu'] }}">
                                        @if (!empty($externalLink['ImageMenu']))
                                            <img src="https://cms.depok.go.id/upload/externalLogo/{{ $externalLink['ImageMenu'] }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                                        @else
                                            <img src="{{ asset('assets/images/page/link.jpg') }}" class="h-28 w-28 rounded-full shadow-lg dark:shadow-gray-800 mx-auto" alt="External Link">
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    Koneksi API Terputus
                @endif
                <!-- End Slide -->
            </div>
        </div>
    </div>
</section>
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
        let dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
        let dayOptions = { weekday: 'long' };
        let fullDate = today.toLocaleDateString('id-ID', dateOptions);
        let day = today.toLocaleDateString('id-ID', dayOptions);
        document.getElementById('date').innerHTML =  fullDate;
        document.getElementById('day').innerHTML =  day;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
    }
</script>
{{-- END::Live Clock JS --}}
@endpush
