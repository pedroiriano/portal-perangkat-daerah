@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    @inject('Carbon', 'Carbon\Carbon')
    <div class="container px-5 mt-5">
        <div class="row gx-5 justify-content-center">
            @if(!empty($announcementDetails))
                @foreach($announcementDetails as $announcementDetail)
                    <div class="col-lg-10 col-xl-8">
                        @php
                            $publishDate = $Carbon::parse($announcementDetail['tgl_publish']);
                            $publishDate = $publishDate->format('d-m-Y');
                        @endphp
                        <div class="single-post">
                            @if (!empty($announcementDetail['lampiran']))
                                <img class="img-fluid mb-2 rounded mx-auto d-block w-100" src="https://cms.depok.go.id/upload/{{ $announcementDetail['lampiran'] }}" />
                                <div class="small text-gray-500 text-center mb-5">Gambar: Kota Depok</div>
                            @else

                            @endif
                            <h1>{{ $announcementDetail['title'] }}</h1>
                            <p class="lead">
                                {!! $announcementDetail['content'] !!}
                            </p>
                            <div class="d-flex align-items-center justify-content-between mb-5">
                                <div class="single-post-meta me-4">
                                    <div class="single-post-meta-details">
                                        <div class="single-post-meta-details-name">Kota Depok</div>
                                        <div class="single-post-meta-details-date">{{ $publishDate }}</div>
                                    </div>
                                </div>
                                <div class="single-post-meta-links">
                                    <a href="#!"><i class="fab fa-twitter fa-fw"></i></a>
                                    <a href="#!"><i class="fab fa-facebook-f fa-fw"></i></a>
                                    <a href="#!"><i class="fas fa-bookmark fa-fw"></i></a>
                                </div>
                            </div>
                            <hr class="my-5" />
                            <div class="text-center"><a class="btn btn-transparent-dark" onclick="history.back()">Kembali ke Pengumuman</a></div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
