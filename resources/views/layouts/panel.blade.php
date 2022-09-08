@isset($pageConfigs)
{{--{!! Helper::updatePageConfig($pageConfigs) !!}--}}
@endisset
<!DOCTYPE html>
@php $configData = Helper::applClasses(); @endphp

<html class="loading {{ $configData['theme'] === 'light' ? '' : $configData['layoutTheme'] }}"
      lang="tr"
{{--      lang="@if (session()->has('locale')){{ session()->get('locale') }}@else{{ $configData['defaultLanguage'] }}@endif" --}}
      data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}"
      @if ($configData['theme'] === 'dark') data-layout="dark-layout"@endif>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="AliAcar Sigorta Panel">
    <meta name="keywords" content="Sigorta, Insurance, Sağlık Siğorta">
    <meta name="author" content="Manoochehr Totonchi">

@include('layouts.panelHeader')
    <!-- Scripts -->
    @yield('pageStyle')
    @yield('pageScript')
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
</head>
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">
<!-- BEGIN: Body-->
@include('layouts.panelTitleBar')
@include('layouts.panelMenu')

@yield('content')
<!-- END: Body-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@include('layouts.panelFooter')
</body>
</html>
