<div class="container-fluid nav-bar bg-nav" style="padding:0 7em;transition: 0.5s;">
    <nav class="navbar navbar-expand-lg navbar-light bg-nav" style="height: 80px">
        <a href="{{ route('pages.home') }}"><img class="logo" src="assets/images/logo/setcolbd.png" alt="logo"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav-style">
                <li class="nav-item @yield('home')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.home') }}">Home</a>
                </li>
                <li class="nav-item  @yield('career')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.career') }}">Career at Japan</a>
                </li>
                <li class="nav-item  @yield('courses')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.courses') }}">Courses</a>
                </li>
                <li class="nav-item  @yield('admission')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.admission') }}">Admission</a>
                </li>
                <li class="nav-item  @yield('blog')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.blog') }}">Blog & News</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="modal" class="nav-link nav_item_design" data-target="#myModal">Seminars</a>
                </li>



            </ul>
            <ul class="navbar-nav navbar-right">
                <a href="#" data-toggle="modal" class="btn btn-success" data-target="#myModal2">Course Enrollment Form</a>
            </ul>

        </div>
    </nav>
</div>
