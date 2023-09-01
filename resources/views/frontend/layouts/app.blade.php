<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon"
          href="{{ isset($siteData->favicon) ? asset($siteData->favicon) : asset('/').'assets/media/logos/favicon.ico' }}"/>
    @include('admin.layouts.includes.css')
    @yield('style')
</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        <div id="kt_app_header" class="app-header px-20" style="position: unset">
            @include('admin.layouts.includes.header')
        </div>
    </div>
</div>

@yield('modal')

<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span><span class="path2"></span>
    </i>
</div>

@include('admin.layouts.includes.js')
@yield('js')

</body>
</html>
