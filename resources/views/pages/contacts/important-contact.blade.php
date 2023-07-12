@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-contact')
            <div class="col-lg-9">
                <div class="row gx-5">
                    @if (!empty($importantContacts))
                        @foreach ($importantContacts as $item)
                            <div class="col-md-6 col-xl-4 mb-5">
                                <div class="card card-team">
                                    <div class="card-body">
                                        <img class="card-team-img mb-3" src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}" alt="Gambar Avatar Kontak Penting" />
                                        <div class="card-team-name">{{ $item['Name'] }}</div>
                                        <div class="card-team-position mb-3">{{ $item['Jabatan'] }}</div>
                                        <p class="small mb-0 text-muted">
                                            <i class="fa-solid fa-phone"></i> {{ $item['Mobile'] }}
                                        </p>
                                        <p class="small mb-0 text-muted">
                                            <i class="fas fa-envelope"></i> {{ $item['Email'] }}
                                        </p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a class="btn btn-icon btn-transparent-dark mx-1" href="{{ $item['Facebook'] }}">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-icon btn-transparent-dark mx-1" href="{{ $item['Instagram'] }}">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{ $importantContacts->links() }}
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
