<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/assets/css/photo.css">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/85c74e2c47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="nav-head">
                <a href="/">SEWELAS SIJI</a>
            </div>
            <div class="nav-auth">
                @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            @role('user')
                                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @endrole
                            @role('staff')
                                <a href="{{ url('/staff/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard Staff</a>
                            @endrole
                            @role('admin')
                                <a href="{{ url('/admin/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard Admin</a>
                            @endrole
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">LOGIN</a>
                            @endauth
                        </div>
                @endif
            </div>
        </div>
    </nav>

    <div class="navbar-support">
        <div class="navbar-support-items">
            <a href="">INSTAGRAM</a>
            <a href="/about">ABOUT</a>
            <a href="{{route('post.index')}}">POST</a>
            <a href="">GALLERY</a>
            <a href="{{route('achievement.index')}}">ACHIEVEMENT</a>
            @role('staff')
            <a href="{{route('photo.create')}}">TAMBAH FOTO</a>
            @endrole
        </div>
    </div>

    <div class="menu">
        <div class="hamburger-items">
            <div class="hamburger-items-list">
                <a href="">INSTAGRAM</a>
            </div>
            <div class="hamburger-items-list">
                <a href="/about">ABOUT</a>
            </div>
            <div class="hamburger-items-list">
                <a href="{{route('post.index')}}">POST</a>
            </div>
            <div class="hamburger-items-list">
                <a href="{{route('photo.index')}}">GALLERY</a>
            </div>
            <div class="hamburger-items-list">
                <a href="{{route('achievement.index')}}">ACHIEVEMENT</a>
            </div>
            <div class="hamburger-items-list">
                @role('staff')
                    <a href="{{route('photo.create')}}"><i class="fa-solid fa-plus"></i> Tambah Foto</a>
                @endrole
            </div>
            <div class="hamburger-items-list">
                <div class="hamburger-items-list-auth">
                    @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                @role('user')
                                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @endrole
                                @role('staff')
                                    <a href="{{ url('/staff/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard Staff</a>
                                @endrole
                                @role('admin')
                                    <a href="{{ url('/admin/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard Admin</a>
                                @endrole
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">LOGIN</a>
                                @endauth
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <button class="hamburger">
        <!-- material icons https://material.io/resources/icons/ -->
        <i class="menuIcon material-icons">menu</i>
    </button>

    @yield('content')

    <script src="/assets/js/index.js"></script>
</body>
</html>