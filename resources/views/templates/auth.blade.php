<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="csrf-token" data-token="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <title>Login 60 Day</title>

    @include('includes.style')

    @stack('style')
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">

                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome to Tax Apps</h1>
                            <p class="lead">
                                Sign in or Sign up to your account to continue
                            </p>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.script')

    @stack('script')

</body>

</html>
