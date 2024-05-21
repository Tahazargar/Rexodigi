<div id="main">
<div class="head">
            <div class="col-div-6 d-flex">
                <span class="nav">
                    <i class="fas fa-bars"></i>
                </span>
                <span class="nav2 me-2">
                    داشبورد
                </span>
            </div>
            <div class="col-div-6">
                <div class="prof-admin">
                    <div class="profile">
                        <p>سلام {{ auth() -> user() -> name }} خوش اومدی , <span>شما {{ auth() -> user() -> persianRole() }} هستید.</span></p>
                        <p>
                            <a style="cursor:pointer;" class="text-white list-unstyled text-decoration-none" onclick="logoutUser()">
                                <i class="fa fa-sign-out-alt"></i>
                                <span class="text-white d-inline">خروج</span>
                            </a>
                        </p>
                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
