<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="canonical" href="http://www.skpwebsite.com">
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>SKPWEBSITE - @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <noscript>Please Enable JavaScript.</noscript>
    <div id="wreper">

    {{-- header start --}}

        <div id="mobile-nav-model">
            <ul>
                <li><a class="activeapply1" href="{{ route('template') }}">template</a></li>
                <li><a class="activeapply2" href="{{ route('service') }}">service</a></li>
                <li><a class="activeapply3" href="{{ route('logos') }}">logo's</a></li>
                <li><a class="activeapply4" href="{{ route('about') }}">about</a></li>
            </ul>
            <a href="{{ route('dashboard') }}">
                <div class="mobile-login">LOG IN</div>
            </a>
        </div>
        <section id="header">
            <div class="contener">
                <div class="index0">
                    <a href="{{ route('home') }}">
                        <div class="logo"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMC4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAyMDAuNiA4MCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjAwLjYgODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoJLnN0MHtmaWxsOiM5QjlCOUI7fQ0KCS5zdDF7ZmlsbDojQzEyNzJEO30NCjwvc3R5bGU+DQo8cGF0aCBpZD0iWE1MSURfMV8iIGNsYXNzPSJzdDAiIGQ9Ik0tNjYxLjksNDA5LjkiLz4NCjxnIGlkPSJYTUxJRF8yXyI+DQoJPHBhdGggaWQ9IlhNTElEXzgyXyIgZD0iTTIzLjMsNDYuN2MtNi41LDAtMTItMi4zLTE2LjUtNi44QzIuMywzNS4zLDAsMjkuOCwwLDIzLjNjMC02LjQsMi4zLTExLjgsNi44LTE2LjRTMTYuOCwwLDIzLjMsMHYxMy40DQoJCWMtMS40LDAtMi43LDAuMi0zLjksMC43Yy0xLjMsMC41LTIuMywxLjItMy4zLDIuMmMtMC45LDAuOS0xLjYsMi0yLjEsMy4ycy0wLjcsMi41LTAuNywzLjhjMCwyLjgsMC45LDUuMSwyLjgsNy4xYzIsMiw0LjMsMyw3LjIsMw0KCQloMTkuOWM2LjUsMCwxMiwyLjMsMTYuNSw2LjhjNC42LDQuNiw2LjksMTAuMSw2LjksMTYuNXMtMi4zLDExLjktNi45LDE2LjVjLTQuNSw0LjUtMTAsNi44LTE2LjUsNi44VjY2LjZjMS40LDAsMi43LTAuMiwzLjktMC43DQoJCWMxLjMtMC41LDIuNC0xLjIsMy4zLTIuMXMxLjYtMS45LDIuMS0zLjJjMC41LTEuMiwwLjgtMi41LDAuOC0zLjljMC0yLjctMS4xLTUtMy03Yy0yLTItNC4zLTMtNy4xLTMNCgkJQzQzLjIsNDYuNywyMy4zLDQ2LjcsMjMuMyw0Ni43eiIvPg0KCTxwYXRoIGlkPSJYTUxJRF84NF8iIGNsYXNzPSJzdDEiIGQ9Ik04Mi41LDQwbDQwLDQwaC0xOC44TDY5LjEsNDUuNmwtNS42LTUuNWw1LjYtNS42bDEuNywxMi44TDk0LjYsOS4xbDkuMS05LjFoMTguOEw4Mi41LDQweg0KCQkgTTk0LjYsOS4xbDkuMS05LjEgTTEwMy43LDgwTDY5LjEsNDUuNkwxMDMuNyw4MHoiLz4NCgk8cGF0aCBpZD0iWE1MSURfODhfIiBkPSJNMjAwLjYsMjYuN2MwLDcuMy0yLjUsMTMuNy03LjgsMTguOWMtNS4yLDUuMi0xMS41LDcuOC0xOC44LDcuOGgtMjYuN1Y4MEgxMzRWNDBoMTMuM0gxNzQNCgkJYzMuNiwwLDYuNy0xLjMsOS4zLTMuOXM0LTUuNyw0LTkuNGMwLTMuNi0xLjMtNi44LTQtOS40Yy0yLjYtMi42LTUuNy0zLjktOS4zLTMuOWgtMjYuN0wxMzQsMGg0MGM3LjMsMCwxMy42LDIuNiwxOC44LDcuOA0KCQlDMTk4LDEzLjEsMjAwLjYsMTkuNCwyMDAuNiwyNi43eiIvPg0KPC9nPg0KPGcgaWQ9IlhNTElEXzgxXyI+DQo8L2c+DQo8ZyBpZD0iWE1MSURfOTBfIj4NCjwvZz4NCjxnIGlkPSJYTUxJRF85MV8iPg0KPC9nPg0KPGcgaWQ9IlhNTElEXzkyXyI+DQo8L2c+DQo8ZyBpZD0iWE1MSURfOTNfIj4NCjwvZz4NCjxnIGlkPSJYTUxJRF85NF8iPg0KPC9nPg0KPGcgaWQ9IlhNTElEXzk1XyI+DQo8L2c+DQo8ZyBpZD0iWE1MSURfOTZfIj4NCjwvZz4NCjxnIGlkPSJYTUxJRF85N18iPg0KPC9nPg0KPGcgaWQ9IlhNTElEXzk4XyI+DQo8L2c+DQo8ZyBpZD0iWE1MSURfOTlfIj4NCjwvZz4NCjxnIGlkPSJYTUxJRF8xMDBfIj4NCjwvZz4NCjxnIGlkPSJYTUxJRF8xMDFfIj4NCjwvZz4NCjxnIGlkPSJYTUxJRF8xMDJfIj4NCjwvZz4NCjxnIGlkPSJYTUxJRF8xMDNfIj4NCjwvZz4NCjwvc3ZnPg0K" alt="skpwebsite"></div>
                    </a>
                    <a href="{{ route('dashboard') }}">
                        <div class="login">
                            <p>Login</p>
                        </div>
                    </a>
                    <div class="mobile-nav"><span> </span></div>
                    <div class="nav">
                        <ul>
                            <li><a class="activeapply1" href="{{ route('template') }}">template</a></li>
                            <li><a class="activeapply2" href="{{ route('service') }}">service</a></li>
                            <li><a class="activeapply3" href="{{ route('logos') }}">logo's</a></li>
                            <li><a class="activeapply4" href="{{ route('about') }}">about</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="header-text">
                    <div class="header1">
                        <h1> Create your beatifull<br> WEBSITE easy way</h1></div>
                    <a href="{{ route('home') ."#s4" }}">
                        <div class="start-now">
                            <p>Start now</p>
                        </div>
                    </a>
                </div>
                
            </div>
        </section>

    {{-- header end --}}


    



            @yield('main')





    {{-- footer start --}}

        <footer>
            <div class="contener footer-c">
                <div class="f-product">
                    <h2>product</h2>
                    <ul>
                        <li><a href="{{ route('domain-help') }}">domain help</a></li>
                        <li><a href="{{ route('template') }}">template</a></li>
                        <li><a href="{{ route('logos') }}">logo's</a></li>
                        <li><a href="{{ route('pricing') }}">pricing</a></li>
                    </ul>
                </div>
                <div class="f-company">
                    <h2>company</h2>
                    <ul>
                        <li><a href="{{ route('about') }}">about</a></li>
                        <li><a href="{{ route('home') }}">customers</a></li>
                        <li><a href="{{ route('term-of-policy') }}">term of policy</a></li>
                        <li><a href="{{ route('contact') }}">contact us</a></li>
                    </ul>
                </div>
                <div class="f-social-media">
                    <h2>social media</h2>
                    <ul>
                        <li><a href="https://www.facebook.com">facebook</a></li>
                        <li><a href="https://twitter.com">twitter</a></li>
                        <li><a href="https://www.instagram.com">instagram</a></li>
                        <li><a href="https://plus.google.com">google plus</a></li>
                    </ul>
                </div>
            </div>
        </footer>

    {{-- footer end --}}
        
    </div>
    
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script>
        $.ajaxSetup({  
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    } 
                });
        function addingC(sele, addclass) {
            $(sele + ':eq(1)').addClass(addclass)
        }
        function fullappere (o,r,t){
            var i=$(window).height(),
            n=$(window).scrollTop(),
            s=$(o),e=s.offset().top,
            l=s.height(),
            a=n+i>=e,
            f=!(n-l>=e),
            w=a&&f;
            if(!w)return!1;
            var p=-($(window).scrollTop()/r-t);
            $(o).css({transform:"translateY("+p+"%)"})
        };


    </script>
    @yield('script')
</body>

</html>
