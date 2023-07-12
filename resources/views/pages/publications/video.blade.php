@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-publication')
            <div class="col-lg-9">
                <h1 class="mb-4">Galeri Video</h1>
                <div class="row mt-5">
                    @if(!empty($video))
                        @foreach($video as $item)
                            <div class="col-md-6 col-xl-4 mb-3 mt-3">
                                <a class="card card-portfolio h-100" href="{{ $item['URL'] }}" target="_blank">
                                    <img class="card-img-top img-fluid" src="https://cms.depok.go.id/upload/gallery/{{ $item['Media'] }}" alt="Galeri Video" style="width: 100%; height: 15vw; object-fit: cover" />
                                    <div class="card-body">
                                        <div class="card-title">{{ $item['Title'] }}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{ $video->links() }}
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
