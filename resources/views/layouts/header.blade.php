<header class="header">
    <nav  class="navbar ">
        <div class="header__container container-fluid">
            <div class="header__nav  row">
                <div class="logo col-6">

                    <img src="{{asset('/img/Logo-3.svg')}}" width="60px" class="logo__img" alt="logo">
                    <a href="/" class="text-decoration-none">RIPOX STORE</a>
                </div>
                @auth
         
            <div class="col-6"  style="display: flex;justify-content: right;">
                {{-- <div style="font-size:16px;margin-right:20px"> <i class="far fa-user"></i>{{auth()->user()->name}}</div> --}}
                    {{-- <div> <i class="far fa-user"></i>{{auth()->user()->name}}</div> --}}
                    <a href="{{ route('logout') }}" style="color:white; font-size:16px;"> <i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
           
          @endauth
            </div>
            
        </div>
    </nav>
</header>
