<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-lg">

            <div class="hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>


            <ul class="navbar-nav">
                <div class="close-menu">
                    <i class="fas fa-times"></i>
                </div>
                @php $counter = 0 @endphp
                @foreach($header as $item)
                    <li class="nav-item">
                        <a class="nav-link @if($counter == 0) echo active @endif }}" href="{{ Request::root() . '/' . $item->link }}">{{ $item->title }}</a>
                    </li>
                    @php $counter++ @endphp
                @endforeach
            </ul>


            <div class="logo">
                <a href="#">Rexodigi</a>
            </div>
        </div>
    </nav>

    <div class="overlay-menu"></div>
</header>

<div class="profile-container">
    @guest
    <div class="login-signup-container">
        <div class="login">
            <a href="{{ route('login') }}">ورود</a>
        </div>
        <div class="register">
            <a href="{{ route('register') }}">ثبت نام</a>
        </div>
    </div>
    @else
    <div class="profile-logout-container">
        <div class="profile">
            <a href="{{ route('dashboard') }}" target="_blank">پروفایل</a>
        </div>
        <div class="logout">
            <a style="cursor: pointer;" onclick="logoutUser()">خروج</a>
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
        @csrf
    </form>
    @endguest
    <div class="fa-cog-container">
        <i class="fas fa-cog fa-spin" aria-hidden="true"></i>
    </div>
</div>
