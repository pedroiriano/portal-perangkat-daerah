@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-profile')
            <div class="col-lg-9">
                <h1 class="mb-4">Struktur Organisasi</h1>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>Instansi</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>Instansi</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                        </tr>
                    </tfoot>
                    @if(!empty($organization))
                    <tbody>
                        @foreach($organization as $item)
                        <tr>
                            <td>{{ $item['nama_pegawai'] }}</td>
                            <td>{{ $item['jabatan'] }}</td>
                            <td>{{ $item['instansi'] }}</td>
                            <td>{{ $item['alamatopd'] }}</td>
                            <td>{{ $item['notelp'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>
@endsection
