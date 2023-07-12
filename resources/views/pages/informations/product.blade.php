@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-information')
            <div class="col-lg-9">
                <h1 class="mb-4">Produk</h1>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Tipe</th>
                            <th>Dokumen</th>
                            <th>Lihat</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tipe</th>
                            <th>Dokumen</th>
                            <th>Lihat</th>
                        </tr>
                    </tfoot>
                    @if(!empty($product))
                    <tbody>
                        @foreach($product as $item)
                        <tr>
                            <td><i class="las la-file-pdf" style="font-size:24px"></i></td>
                            <td>{{ $item['title'] }}</td>
                            <td>
                                <a href="https://cms.depok.go.id/upload/file/{{ $item['uploaddokumen'] }}" type="button" class="btn btn-blue btn-icon btn-sm" target="_blank">
                                    <i class="las la-download" style="font-size:16px"></i>
                                </a>
                            </td>
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
