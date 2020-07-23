<!-- light-blue - v4.0.1 - 2018-10-31 -->

<!DOCTYPE html>
<html>

<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
    <link href="{{ asset('css/system.css') }}" rel="stylesheet">

    @yield('css')

    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
            chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                        https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>

<body>
    <div class="logo">
        <h4><a href="index.html">Natal <strong>Empregos</strong></a></h4>
    </div>
    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.png" alt=""> Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i> Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i> Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#" class="btn-navbar" data-toggle="collapse" data-target=".sidebar" title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="glyphicon glyphicon-off"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Search...">
                </form>
            </div>
        </header>

        <div class="content container">
            <h2 class="page-title">Natal Empregos</h2>


            @yield('content')


            <footer class="content-footer">
                FOOTER
            </footer>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>

    <!-- common libraries. required for every page-->
    <script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery-pjax/jquery.pjax.js') }}"></script>
    <script src="{{ asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/widgster/widgster.js') }}"></script>
    <script src="{{ asset('lib/underscore/underscore.js') }}"></script>

    <!-- common application js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>

    <!-- page specific scripts -->
    <!-- page libs -->
    <script src="{{ asset('lib/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('lib/jquery.sparkline/index.js') }}"></script>

    <script src="{{ asset('lib/backbone/backbone.js') }}"></script>
    <script src="{{ asset('lib/backbone.localStorage/build/backbone.localStorage.min.js') }}"></script>

    <script src="{{ asset('lib/d3/d3.min.js') }}"></script>
    <script src="{{ asset('lib/nvd3/build/nv.d3.min.js') }}"></script>

    <!-- page application js -->
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/chat.js') }}"></script>


    @yield('js')

</body>

</html>