<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/jendi.svg') }}">

    @isset($title)
    <title>{{ config('app.name', 'Laravel') }} - {{ $title }}</title>
    @else
    <title>{{ config('app.name', 'Laravel') }}</title>
    @endisset

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>

<body>
    <div id="app">
        <x-admin.header />


        <x-admin.sidebar />
        <main id="content" data-uk-height-viewport="expand: true">

            @if (session('status'))
            <aside class="uk-container">
                <div class="uk-margin-top">
                    <x-status-alert />
                </div>
            </aside>
            @endif
            @if (session('success'))
            <aside class="uk-container">
                <div class="uk-margin">
                    <x-alert type="success" close="true" :message="session('success')" />
                </div>
            </aside>
                @endif
                @if (session('warning'))
                <aside class="uk-container">
                <div class="uk-margin">

                    <x-alert type="warning" close="true" :message="session('warning')" />
                </div>
                </aside>
                @endif

            {{ $slot }}
        </main>
    </div>

    <!-- App -->
    <script src="{{ mix('js/app.js') }}"></script>


    @stack('scripts')

</body>

</html>
