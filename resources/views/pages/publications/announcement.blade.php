@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-publication')
            <div class="col-lg-9">
                <h1 class="mb-4">Pengumuman</h1>
                <div class="row mt-5">
                    @if(!empty($announcement))
                        @foreach($announcement as $item)
                            <div class="col-md-6 col-xl-4 mb-3 mt-3">
                                <a class="card h-100 lift" href="/pengumuman/detail/{{ $item['slug_title'] }}">
                                    @if(!empty($item['lampiran']))
                                        @php
                                            $announcementPhoto = "https://cms.depok.go.id/upload/".$item['lampiran'];
                                            $pi = 1;
                                        @endphp
                                    @else
                                        @php
                                            $pi = 0;
                                        @endphp
                                    @endif
                                    <img class="card-img-top" src="{{ ($pi === 1) ? $announcementPhoto : asset('images/page/announcement.jpg') }}" alt="Gambar Pengumuman">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item['slug_title'] }}</h5>
                                        <p class="card-text">
                                            {{ strip_tags(substr($item['content'],0, 120). '...') }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{ $announcement->links() }}
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
