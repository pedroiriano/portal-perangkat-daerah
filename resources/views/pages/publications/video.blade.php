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
                    <a class="bg-indigo-600/10 text-indigo-600 font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">
                        Publikasi
                    </a>
                    <h5 class="font-semibold text-2xl mt-5">
                        Galeri Video
                    </h5>
                </div>
            </div>
        </div>
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid md:grid-cols-3 grid-cols-2 justify-center mx-auto mt-8">
                    @if(!empty($video))
                        @foreach($video as $item)
                            @if($item['MediaType'] === 'FL01')
                                <?php
                                    $link = $item['URL'];
                                    $videoId = substr(str_replace('https://www.youtube.com/watch?v=', '', $link), 0, 11);
                                ?>
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="" data-type="youtube" data-id="{{ $videoId }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="{{ $item['Title'] }}">
                                        <img loading="lazy" src="https://cms.depok.go.id/upload/gallery/{{ $item['Media'] }}" class="" alt="{{ $item['Title'] }}">
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @else
                        Koneksi API Terputus
                    @endif
                </div>
                {{ $video->onEachSide(2)->links('vendor.pagination.custom-tailwind') }}
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                        Publikasi
                    </h5>
                    <div class="flex items-center justify-center mt-8">
                        <div class="ml-3">
                            <a href="/publikasi/berita" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Berita
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/publikasi/pengumuman" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Pengumuman
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/publikasi/foto" class="font-semibold hover:text-indigo-600" aria-selected="false">
                                Galeri Foto
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="/publikasi/video" class="font-semibold hover:text-indigo-600" aria-selected="true">
                                Galeri Video
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center mt-4">
                        <div class="ml-3">
                            <a href="https://ppid.depok.go.id/" class="font-semibold hover:text-indigo-600" target="_blank" aria-selected="false">
                                PPID
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
