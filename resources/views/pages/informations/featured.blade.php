@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-information')
            <div class="col-lg-9">
                @inject('Carbon', 'Carbon\Carbon')
                <h1 class="mb-4">Program Unggulan</h1>
                <div class="timeline mb-3">
                    @if(!empty($featured))
                        @foreach($featured as $item)
                            <div class="timeline-item">
                                @php
                                    $publishDate = $Carbon::parse($item['tgl_publish']);
                                    $publishDate = $publishDate->format('d-m-Y');
                                @endphp
                                <div class="timeline-item-marker">
                                    <div class="timeline-item-marker-text">{{ $publishDate }}</div>
                                    <div class="timeline-item-marker-indicator bg-primary-soft text-primary"><i data-feather="flag"></i></div>
                                </div>
                                <div class="timeline-item-content pt-0">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h5 class="text-primary">{{ $item['title'] }}</h5>
                                            {!! $item['content'] !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{ $featured->links() }}
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
