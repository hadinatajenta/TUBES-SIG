<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/css/dashboard.css">
    <!--icon Website-->
    <link rel="icon" href="img/icon.png">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="img/img.jpg" alt="">
            </div>

            <span class="logo_name">{{ Auth::user()->name }}</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="/home" >
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a>
                </li>
                <li>
                    <a href="/content">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Content</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('setting', ['id' => Auth::user()->id]) }}">
                        <i class="uil uil-setting"></i>
                        <span class="link-name">Setting</span>
                    </a>
                </li>
            </ul>
                    
            <ul class="logout-mode">
                <li>
                    <a  class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>        
    </nav>

    @yield('content')
    
    <script src="/js/script.js"></script>
</body>
</html>
