<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head')
</head>

<body>
    @if (Route::is(['index-two']))

        <body class="home-two">
    @endif
    @if (Route::is(['index-three']))

        <body class="home-three">
    @endif
    @if (Route::is(['index-four']))

        <body class="home-five">
    @endif
    
    @if (Route::is(['coming-soon', 'error-404', 'error-500', 'under-construction']))

        <body class="error-page">
    @endif
    @if (Route::is(['student-messages','instructor-chat']))
    <body class="chat-page main-chat-blk">
    @endif
    @if (Route::is(['student-messages','instructor-chat']))
    <div class="main-wrapper chat-wrapper">
        @endif
    <!-- Main Wrapper -->
    @if (!Route::is(['login', 'register','student-messages','instructor-chat']))
        <div class="main-wrapper">
    @endif
    @if (Route::is(['login', 'register']))
        <div class="main-wrapper log-wrap">
    @endif
    @if (
        !Route::is([
            'coming-soon',
            'error-404',
            'error-500',
            'forgot-password',
            'login',
            'new-password',
            'register-step-five',
            'register-step-four',
            'register-step-one',
            'register-step-three',
            'register-step-two',
            'register',
            'under-construction',
            'verification-code',
            'view-invoice'
        ]))
        @include('layout.partials.header')
    @endif
    @yield('content')
    @if (
        !Route::is([
            'coming-soon',
            'error-404',
            'error-500',
            'forgot-password',
            'login',
            'new-password',
            'register-step-five',
            'register-step-four',
            'register-step-one',
            'register-step-three',
            'register-step-two',
            'register',
            'under-construction',
            'verification-code',
            
        ]))
        @include('layout.partials.footer')
    @endif
    </div>
    <!-- /Main Wrapper -->
    @include('layout.partials.footer-scripts')

</body>

</html>
