<!doctype html>
<html lang="en">

@include('backend.includes.header')

<body>

<div class="wrapper">

    @include('backend.includes.sidebar')

    <div class="main-panel">

        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('dashboard')}}"> Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                                <i class="material-icons">person</i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route('logout')}}">
                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                        &nbsp; &nbsp; logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/home" target="_blank">
                                Website
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    {{--<a href="http://www.creative-tim.com">Creative Tim</a>, all rights reserved.--}}
                </p>
            </div>
        </footer>
    </div>
</div>
{{--@include('backend.includes.fixedPlugin')--}}

</body>

@include('backend.includes.footer')
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>

</html>