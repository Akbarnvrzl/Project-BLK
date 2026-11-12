@include('front-end.Layouts.components.meta')

<body class="bg-paper text-ink antialiased pb-24 md:pb-0">
@include('front-end.Layouts.components.header')

@yield('conten')

@include('front-end.Layouts.components.footer')
@include('front-end.Layouts.components.scripts')

