@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-information')
            <div class="col-lg-9">
                <h1 class="mb-4">Inovasi</h1>
                @php
                    $counter = 1;
                @endphp
                @if(!empty($innovation))
                    @foreach($innovation as $item)
                        <div class="card card-collapsable mb-3">
                            <a class="card-header" href="#collapseCardExample0{{ $counter }}" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample0{{ $counter }}">
                                {{ $item['title'] }}
                                <div class="card-collapsable-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="collapseCardExample0{{ $counter }}">
                                <div class="card-body">
                                    {!! $item['content'] !!}
                                </div>
                            </div>
                        </div>
                        @php
                            $counter++;
                        @endphp
                    @endforeach
                @endif
                {{ $innovation->links() }}
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
