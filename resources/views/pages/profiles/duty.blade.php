@extends('layouts.page')

@section('content')
@include('includes.float')
<section class="bg-white py-10">
    <div class="container px-5 mt-10">
        <div class="row gx-5">
            @include('includes.sidenav-profile')
            <div class="col-lg-9">
                <h1 class="mb-4">Tugas Pokok dan Fungsi</h1>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th style="min-width: 5rem;">Nama Jabatan</th>
                            <th>Tugas Pokok</th>
                            <th style="min-width: 5rem;">Uraian Tugas</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th style="min-width: 5rem;">Nama Jabatan</th>
                            <th>Tugas Pokok</th>
                            <th style="min-width: 5rem;">Uraian Tugas</th>
                        </tr>
                    </tfoot>
                    @if(!empty($duty))
                    <tbody>
                        @foreach($duty as $item)
                        <tr>
                            <td>
                                @if (strlen($item['Jabatan']) >= 75)
                                {{ strip_tags(substr($item['Jabatan'],0, 75). '...') }}
                                @else
                                    {{ $item['Jabatan'] }}
                                @endif
                            </td>
                            <td>
                                @if (strlen($item['TugasPokok']) >= 75)
                                {{ strip_tags(substr($item['TugasPokok'],0, 75). '...') }}
                                @else
                                    {{ $item['TugasPokok'] }}
                                @endif
                            </td>
                            <td>
                                @if (strlen($item['UraianTugas']) >= 75)
                                {{ strip_tags(substr($item['UraianTugas'],0, 75). '...') }}
                                @else
                                    {{ $item['UraianTugas'] }}
                                @endif
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
