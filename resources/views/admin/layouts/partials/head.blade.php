<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    <title> @yield('meta_title')</title>
    @include('admin.layouts.partials.cssfiles')
    @yield('css')
    <style>
        .page-wrapper.compact-wrapper .page-body-wrapper header.main-nav .main-navbar .nav-menu {
            height: calc(100vh);
        }
    </style>
</head>
