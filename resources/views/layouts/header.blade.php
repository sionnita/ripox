<header class="header">
    <nav  class="navbar ">
        <div class="header__container container-fluid">
            <div class="header__nav">
                <div class="logo">

                    <img src="{{asset('/img/Logo-3.svg')}}" width="60px" class="logo__img" alt="logo">
                    <a href="/" class="text-decoration-none">RIPOX STORE</a>
                </div>
            </div>
            @auth
            {{auth()->user()->name}}
            <div class="text-end">
              <a href="{{ route('logout') }}" class="btn btn-outline-light me-2">Logout</a>
            </div>
          @endauth
        </div>
    </nav>
</header>
