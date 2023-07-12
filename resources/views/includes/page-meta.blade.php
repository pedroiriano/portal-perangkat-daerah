{{-- BEGIN::Google Search Meta --}}
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta content="Dinas Komunikasi dan Informatika Kota Depok" name="description" />
<meta name="keywords" content="website, dinas komunikasi dan informatika kota depok, diskominfo, website dinas komunikasi dan informatika kota depok, website diskominfo, depok, kota depok, pemerintah kota depok">
<meta name="author" content="PI" />
<meta name="website" content="https://pepeve.id" />
<meta name="email" content="pdzeus83aw@gmail.com" />
<meta name="version" content="1.0.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Security-Policy" content="style-src 'self' 'unsafe-inline' https://fonts.googleapis.com/; font-src 'self' 'unsafe-inline' https://fonts.gstatic.com/ https://fonts.googleapis.com/;">
{{-- END::Google Search Meta --}}

{{-- BEGIN::CSRF Token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- END::CSRF Token --}}

{{-- BEGIN::Title --}}
<title>{{ empty($shortWorkUnits) ? config('app.name', 'Diskominfo Depok') : $shortWorkUnits }}</title>
{{-- END::Title --}}

{{-- BEGIN::Main CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
{{-- END::Main CSS --}}

{{-- BEGIN::Plugins CSS --}}
<link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/swiper/css/swiper.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
{{-- END::Plugins CSS --}}

{{-- BEGIN::Data Tables CSS --}}
<link href="{{ asset('assets/datatables/datatables.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/datatables/jqueryui/themes/base/jquery-ui.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/datatables/datatables/css/dataTables.jqueryui.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/datatables/responsive/css/responsive.jqueryui.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/datatables/buttons/css/buttons.jqueryui.min.css') }}" rel="stylesheet" />
{{-- END::Data Tables CSS --}}

{{-- BEGIN::Canonical --}}
<link rel="canonical" href="https://diskominfo.depok.go.id" />
{{-- END::Canonical --}}

{{-- BEGIN::Facebook Meta --}}
<meta property="og:title" content="DISKOMINFO | Website DISKOMINFO - Kota Depok">
<meta property="og:type" content="website">
<meta property="og:url" content="https://diskominfo.depok.go.id">
<meta property="og:site_name" content="DISKOMINFO">
<meta property="og:description" content="DISKOMINFO Website Dinas Komunikasi dan Informatika Kota Depok">
<meta property="og:image" content="">
{{-- END::Facebook Meta --}}

{{-- BEGIN::Twitter Meta --}}
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="DISKOMINFO | Website DISKOMINFO - Kota Depok">
<meta name="twitter:description" content="DISKOMINFO Website Dinas Komunikasi dan Informatika Kota Depok">
<meta name="twitter:image" content="">
{{-- END::Twitter Meta --}}

{{-- BEGIN::Favicons --}}
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/logodepoksquaresmall_16x16.png') }}" />
{{-- END::Favicons --}}