<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="row no-gutters hero-static">
                    <div class="col-xl-8 d-flex bg-gd-light hero-static">
                        <div class="content content-full d-flex align-items-center text-center">
                            <div class="w-100 px-20 py-100">
                                <div class="animated fadeIn mb-10" data-toggle="appear">
                                    <i class="si si-fire fa-3x text-primary"></i>
                                </div>
                                <h1 class="font-w600 display-3 invisible mb-10" data-toggle="appear">
                                    codebase <small class="font-w300 text-primary">3.0</small>
                                </h1>
                                <h2 class="h3 font-w300 text-muted mb-50 invisible" data-toggle="appear" data-timeout="150">Next generation, multipurpose UI framework.</h2>
                                <div class="invisible" data-toggle="appear" data-timeout="300">
                                    <a class="btn btn-hero btn-noborder btn-success min-width-175 mb-10 mx-5" href="https://1.envato.market/95j">
                                        <i class="si si-bag mr-5"></i> Purchase
                                    </a>
                                    <a class="btn btn-hero btn-noborder btn-primary min-width-175 mb-10 mx-5" href="be_pages_dashboard.html">
                                        <i class="si si-rocket mr-5"></i> Live Preview
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                 

                <!-- Call to Action -->
                <div class="bg-white">
                    <div class="content content-full text-center overflow-hidden">
                        <div class="py-100">
                            <h3 class="font-w700 mb-10">
                                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="link-effect" href="https://1.envato.market/ydb">pixelcave</a>
                            </h3>
                            <h4 class="font-w400 text-muted mb-30">Passionate web design and development with over 12.000 customers worldwide.</h4>
                            <a class="btn btn-hero btn-lg btn-noborder btn-rounded btn-alt-success mb-10 invisible" data-toggle="appear" data-class="animated zoomIn" href="https://1.envato.market/95j">
                                <i class="fa fa-shopping-bag mr-10"></i> Purchase Codebase
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Call to Action -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="{{ asset('assets/js/codebase.core.min.js') }}"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
    </body>
</html>
