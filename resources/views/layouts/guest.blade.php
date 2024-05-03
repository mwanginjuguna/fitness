<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="{{ config('app.google_site_verification') }}" />

    <title>{{ $title ? $title.' | '.config('app.name') : 'Trusted Personal Fitness Trainer | '.config('app.name', 'CN Fitness') }}</title>
    <meta name="description" content="{{ $meta ?? 'Start your fitness journey with me to go beyond your goals' }}">

    <meta name="keywords" content="personal trainer in Nairobi">

    <meta content="{{ $title ?? config('app.name', 'Professional Essay Writing Service') }}" property="og:title">
    <meta content="{{ $meta ?? '' }}" property="og:description">

    <meta name="image" content="{{ $ftImg ?? asset('assets/cn-fitness.png') ?? '' }}" property="og:image">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Essay Writing Service",
            "name": "{{ config('app.name') }}",
            "headline": "{{ $h1heading ?? 'Trusted Personal Fitness Trainer | '.config('app.name') }}",
            "description": "{{ $meta ?? 'Start your fitness journey with me to go beyond your goals.' }}",
            "logo": "{{ asset('assets/cn-fitness.png') ?? '' }}",
        }
</script>
</head>
<body class="font-serif antialiased"
      x-data="{ darkMode: false }"
      x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      x-cloak>
<div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen flex flex-col">
    @livewire('welcome.navigation')

    <div class="w-full text-slate-950 dark:text-slate-100 bg-slate-100 dark:bg-slate-900">
        {{ $slot }}
    </div>

    <x-parts.footer />
</div>

@if(config('app.env') === 'production')
    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
@endif
</body>
</html>
