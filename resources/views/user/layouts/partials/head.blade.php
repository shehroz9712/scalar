<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('meta_title') | {{ getTitle() }}</title>
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="description" content="@yield('meta_description')" />
    @yield('meta')

    @include('user.layouts.partials.cssfiles')
    @yield('css')

</head>
