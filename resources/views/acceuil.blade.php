<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BTPPRO landing page</title>
    <!-- Meta Share -->
    <meta property="og:title" content="btppro service btp" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="images/screen.jpg" />
    <!-- CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Product+Sans:300,400,700" rel="stylesheet">
    <!-- build:css css/app.min.css -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/landing/css/global/bootstrap.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="/landing/css/global/plugins/icon-font.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/landing/css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <!-- /build -->
</head>

<body class="overflow-hidden">
    @include('partials.header')
    {{-- @include('partials.partenaires') --}}
    <!-- // end #services.section -->
    {{-- @include('partials.services') --}}
    <!-- Features -->
    @include('partials.features')
    <!-- // end features -->
    <!-- Testimonials -->
    {{-- @include('partials.temoignages') --}}
    <!-- // end Testimonials -->
    <!-- Pricing -->
    {{-- @include('partials.pricing') --}}
    <!-- // end Pricing -->
    <!-- Signup -->
    @include('partials.newsletter')

    @include('partials.footer')
    <!-- // end #about.section -->
    <!-- // end .agency -->
    <!-- JS Files -->
    <!-- build:js js/app.min.js -->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/landing/js/global/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/landing/js/global/bootstrap.bundle.min.js"></script>
    {{-- alert sweetjs --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <!-- Main JS -->
    <script src="/landing/js/script.js"></script>
    <!-- /build -->
</body>

</html>
