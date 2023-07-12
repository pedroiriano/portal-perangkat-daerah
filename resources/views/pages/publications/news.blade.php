@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-publication')
            <div class="col-lg-9">
                @inject('Carbon', 'Carbon\Carbon')
                <h1 class="mb-4">Berita</h1>
                @if (!empty($latestNews))
                    @foreach ($latestNews as $latestNew)
                        <a class="card post-preview post-preview-featured lift mb-5 overflow-hidden" href="/berita/detail/{{ $latestNew['slug_title'] }}">
                            @php
                                $publishDate = $Carbon::parse($latestNew['tgl_publish']);
                                $publishDate = $publishDate->format('d-m-Y');
                            @endphp
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    @if (!empty($latestNew['lampiran']))
                                        <div class="post-preview-featured-img" style="background-image: url('https://cms.depok.go.id/upload/{{ $latestNew['lampiran'] }}')">
                                        </div>
                                    @else
                                        <div class="post-preview-featured-img" style="background-image: url({{ asset('images/page/news.jpg') }})">
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body">
                                        <div class="py-5">
                                            <h5 class="card-title">{{ $latestNew['title'] }}</h5>
                                            <p class="card-text">{{ strip_tags(substr($latestNew['content'],0, 120). '...') }}</p>
                                        </div>
                                        <hr />
                                        <div class="post-preview-meta">
                                            <div class="post-preview-meta-details">
                                                <div class="post-preview-meta-details-name">DISKOMINFO Kota Depok</div>
                                                <div class="post-preview-meta-details-date">{{ $publishDate }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    @else
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Koneksi API Terputus
                        </div>
                    </div>
                @endif
                <div class="row gx-5">
                    @if(!empty($news))
                        @foreach($news as $item)
                            <div class="col-md-6 col-xl-4 mb-5">
                                @php
                                    $publishDate = $Carbon::parse($item['tgl_publish']);
                                    $publishDate = $publishDate->format('d-m-Y');
                                @endphp
                                <a class="card post-preview lift h-100" href="/berita/detail/{{ $item['slug_title'] }}">
                                    @if (!empty($item['lampiran']))
                                        <img class="card-img-top" src="https://cms.depok.go.id/upload/{{ $item['lampiran'] }}" alt="Gambar Berita" />
                                    @else
                                        <img class="card-img-top" src="{{ asset('images/page/news.jpg') }}" alt="Gambar Berita" />
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item['slug_title'] }}</h5>
                                        <p class="card-text">
                                            {{ strip_tags(substr($item['content'],0, 120). '...') }}
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="post-preview-meta">
                                            <div class="post-preview-meta-details">
                                                <div class="post-preview-meta-details-name">DISKOMINFO Kota Depok</div>
                                                <div class="post-preview-meta-details-date">{{ $publishDate }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{ $news->links() }}
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
