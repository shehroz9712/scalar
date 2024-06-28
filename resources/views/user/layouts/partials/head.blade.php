<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ isset($page) ? $page->title : '' }} | {{ getTitle() }}</title>
    <meta name="keywords" content="{{ isset($page) ? $page->meta_keywords : '' }}" />
    <meta name="description" content="{{ isset($page) ? $page->meta_description : '' }}" />

    @include('user.layouts.partials.cssfiles')
    @yield('css')

</head>
