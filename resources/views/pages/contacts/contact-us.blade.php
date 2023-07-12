@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-contact')
            <div class="col-lg-9">
                <div class="row gx-5 mb-5">
                    @if (!empty($generalInformations))
                        @foreach ($generalInformations as $generalInformation)
                            <div class="col-lg-4 mb-5">
                                <a class="card card-link border-bottom-0 border-start-0 border-end-0 border-top-lg border-primary lift text-center o-visible h-100" href="#!">
                                    <div class="card-body">
                                        <div class="icon-stack icon-stack-xl bg-primary-soft text-primary mb-4 mt-n5 z-1 shadow"><i data-feather="home"></i></div>
                                        <h5>Alamat</h5>
                                        <p class="card-text">{{ $generalInformation['Alamat'] }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-primary fw-bold d-inline-flex align-items-center">
                                            Lihat Peta
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <a class="card card-link border-bottom-0 border-start-0 border-end-0 border-top-lg border-secondary lift text-center o-visible h-100" href="#!">
                                    <div class="card-body">
                                        <div class="icon-stack icon-stack-xl bg-secondary-soft text-secondary mb-4 mt-n5 z-1 shadow"><i data-feather="mail"></i></div>
                                        <h5>Surel</h5>
                                        <p class="card-text">{{ $generalInformation['Email'] }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-secondary fw-bold d-inline-flex align-items-center">
                                            Kirim Surat
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <a class="card card-link border-bottom-0 border-start-0 border-end-0 border-top-lg border-teal lift text-center o-visible h-100" href="#!">
                                    <div class="card-body">
                                        <div class="icon-stack icon-stack-xl bg-teal-soft text-teal mb-4 mt-n5 z-1 shadow"><i data-feather="phone-call"></i></div>
                                        <h5>Telepon</h5>
                                        <p class="card-text">{{ $generalInformation['Email'] }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-teal fw-bold d-inline-flex align-items-center">
                                            Telepon Kami
                                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
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
