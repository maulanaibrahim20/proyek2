<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Puskesmas Lohbener</title>

    <!-- Bootstrap core CSS -->
    @include('layouts_landing.css.style_css')

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include("layouts_landing.header.v_header")
    <!-- ***** Header Area End ***** -->

    

    @include("layouts_landing.main.v_main")

    @include("layouts_landing.service.v_service")

    @include("layouts_landing.about_us.v_about_us")

    @include('layouts_landing.client.v_client')

    @include("layouts_landing.pricing.v_pricing")

    {{-- memanggil layouts footer yang ada di folder layouts_landing --}}
    @include('layouts_landing.footer.v_footer')

    {{-- memanggil javascript yang ada di folder layouts_landing --}}
    @include('layouts_landing.js.style_js')


</body>

</html>
