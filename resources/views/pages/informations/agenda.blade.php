@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-information')
            <div class="col-lg-9">
                @inject('Carbon', 'Carbon\Carbon')
                <h1 class="mb-4">Agenda</h1>
                <div class="card">
                    <div class="card-header border-bottom">
                        <ul class="nav nav-tabs card-header-tabs" id="cardTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="general-tab" href="#general" data-bs-toggle="tab" role="tab" aria-controls="general" aria-selected="true">Umum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="special-tab" href="#special" data-bs-toggle="tab" role="tab" aria-controls="special" aria-selected="false">Khusus</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="cardTabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                @if(!empty($generalAgenda))
                                    @foreach($generalAgenda as $item)
                                        @php
                                            $startDate = $Carbon::parse($item['TanggalAwal']);
                                            $startDate = $startDate->format('d-m-Y');
                                            $finishDate = $Carbon::parse($item['TanggalAkhir']);
                                            $finishDate = $finishDate->format('d-m-Y');
                                        @endphp
                                        <div class="card">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    @if (!empty($item['Media']))
                                                        <img class="img-fluid" src="https://cms.depok.go.id/upload/event/{{ $item['Media'] }}" alt="{{ $item['Title'] }}">
                                                    @else
                                                        <img class="img-fluid" src="{{ asset('images/page/agenda.jpg') }}" alt="{{ $item['Title'] }}">
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $item['Title'] }}</h5>
                                                        <p class="card-text"><small>{!! $item['Deskripsi'] !!}</small></p>
                                                        <h6>
                                                            <small class="text-muted">
                                                                <i class="las la-users" style="font-size:24px"></i>
                                                                Penyelenggara: {{ $item['Penyelenggara'] }} <br>
                                                                <i class="las la-phone" style="font-size:24px"></i>
                                                                {{ $item['PIC'] }} <br>
                                                                <i class="las la-user-alt" style="font-size:24px"></i>
                                                                {{ $item['Alamat'] }} <br><br>
                                                                <i class="las la-calendar-alt" style="font-size:24px"></i>
                                                                Dimulai {{ $startDate }} -
                                                                Berakhir {{ $finishDate }}
                                                            </small>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                                @if(!empty($specialAgenda))
                                    @foreach($specialAgenda as $item)
                                        @php
                                            $startDate = $Carbon::parse($item['TanggalAwal']);
                                            $startDate = $startDate->format('d-m-Y');
                                            $finishDate = $Carbon::parse($item['TanggalAkhir']);
                                            $finishDate = $finishDate->format('d-m-Y');
                                        @endphp
                                        <div class="card">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    @if (!empty($item['Media']))
                                                        <img class="img-fluid" src="https://cms.depok.go.id/upload/event/{{ $item['Media'] }}" alt="{{ $item['Title'] }}">
                                                    @else
                                                        <img class="img-fluid" src="{{ asset('images/page/agenda.jpg') }}" alt="{{ $item['Title'] }}">
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $item['Title'] }}</h5>
                                                        <p class="card-text"><small>{!! $item['Deskripsi'] !!}</small></p>
                                                        <h6>
                                                            <small class="text-muted">
                                                                <i class="las la-users" style="font-size:24px"></i>
                                                                Penyelenggara: {{ $item['Penyelenggara'] }} <br>
                                                                <i class="las la-phone" style="font-size:24px"></i>
                                                                {{ $item['PIC'] }} <br>
                                                                <i class="las la-user-alt" style="font-size:24px"></i>
                                                                {{ $item['Alamat'] }} <br><br>
                                                                <i class="las la-calendar-alt" style="font-size:24px"></i>
                                                                Dimulai {{ $startDate }} -
                                                                Berakhir {{ $finishDate }}
                                                            </small>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
