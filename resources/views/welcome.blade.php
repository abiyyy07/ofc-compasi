<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XI - Welcome</title>
    <link rel="stylesheet" href="assets/css/welcome.css">

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
                                <a href="{{ url('/members/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard User</a>
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
            <a href="{{route('photo.index')}}">GALLERY</a>
            <a href="{{route('achievement.index')}}">ACHIEVEMENT</a>
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
                <div class="hamburger-items-list-auth">
                    @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                @role('user')
                                    <a href="{{ url('/members/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard User</a>
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

    <div class="banner"></div>

    <div class="header-landing-page">
        <div class="header-landing-page-text">
            <img src="/assets/images/swj.png" alt="sma-wp-sewelas-siji">
        </div>
        <div class="header-landing-page-support-text">
            <p>"kelas kecil dengan segala bentuk keberagaman dengan satu tujuan"</p>
        </div>
    </div>

    <div class="content-card">
        <div class="content-card-body">
            <div class="content-card-icon"><i class="fa-solid fa-video"></i></div>
            <div class="content-card-title">
                <p>POSTINGAN</p>
            </div>
            <div class="content-card-text">Anda dapat melihat postingan kami tentang aktivitas kami</div>
            <div class="content-card-link">
                <a href="{{route('post.index')}}">Post</a>
            </div>
        </div>
        <div class="content-card-body">
            <div class="content-card-icon"><i class="fa-solid fa-image"></i></div>
            <div class="content-card-title">
                <p>GALLERY</p>
            </div>
            <div class="content-card-text">Gallery kami berisikan tentang hal random maupun kenang-kenangan</div>
            <div class="content-card-link">
                <a href="{{route('post.index')}}">Gallery</a>
            </div>
        </div>
        <div class="content-card-body">
            <div class="content-card-icon"><i class="fa-solid fa-trophy"></i></div>
            <div class="content-card-title">
                <p>ACHIEVEMENT</p>
            </div>
            <div class="content-card-text">Berisikan segala penghargaan ataupun juara individu</div>
            <div class="content-card-link">
                <a href="{{route('achievement.index')}}">Achievement</a>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>LATEST POST UPDATE</h2>
        <div class="container-card">
            @foreach($posts as $post)
            <div class="card-post">
                <a href="post/{{ $post->id }}">
                <img src="{{ asset('storage/images/'.$post->image) }}" class="card-post-image">
                </a>
                <div class="card-body">
                <p class="card-post-category">{{ $post->category }}</p>
                <p class="post-date">{{ $post->date }}</p>
                <div class="card-title">{{ Str::limit($post->title, 18) }}</div>
                <p class="card-post-description">{{ Str::limit($post->content, 15) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <footer>
        <div class="footer-content">
            &copy; {{ date("Y") }} - SMA Wijaya Putra | XI-1.
        </div>
    </footer>

<script src="/assets/js/index.js"></script>
</body>
</html>