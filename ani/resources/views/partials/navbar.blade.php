<nav class="site-header sticky-top py-3 navbar" style="background-color:black; padding: 20px; position:fixed">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="nav-link text-light" href="{{ route('home') }}">Ana Sayfa <i class="fa fa-home"
                style="font-size:20px"></i></a>

        <div class="nav-link text-light">
            @livewire('search')
        </div>
        <div style="text-align: center">

            @auth
                <div class="dropdown">
                    <span class="text-light" style="text-align: end"><a
                            class="nav-link text-light">{{ $username->name }}
                            <i class="fa fa-user" style="font-size:20px"></i></a>
                    </span>
                    <div class="dropdown-content">


                        <a class="nav-link" style="color: black"
                            href="{{ route('account', $username->username) }}">Hesabım</a>


                        <hr>

                        <a class="nav-link" style="color: black" href=""
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Çıkış
                            Yap</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf
                        </form>
                    </div>
                </div>

            @endauth

            @guest
                <div class="dropdown">
                    <span class="text-light"><a class="nav-link hesabim"
                            style="color: white; text-decoration: none">Kaydol
                            <i class="fa fa-sign-in" style="font-size:20px"></i></a></span>
                    <div class="dropdown-content">
                        <a class="nav-link" style="color: black" href="{{ route('login') }}">Giriş Yap</a>
                        <a class="nav-link" style="color: black" href="{{ route('signupform') }}">Kaydol</a>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</nav>

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        width: 100%;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .hesabim {
        padding-right: 25px;
        padding-left: 25px;
    }

    .input {
        border-radius: 5px;
        width: 100%;
        margin-right: 200px;
        padding-bottom: 5px;
        padding-top: 5px;
    }

    .navbar {
        position: relative;
        width: 100%;
    }

</style>
