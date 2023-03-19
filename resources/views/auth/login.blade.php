<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:wght@100;200;300;400;500&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./vendor/slick/slick.css">
    <link rel="stylesheet" href="./vendor/slick/slick-theme.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="img/Logo-3.svg " type="image/x-icon">
    <title>Ripox Store</title>
</head>


<body>
    <header class="header">
        <nav  class="navbar ">
            <div class="header__container">
                <div class="header__nav">
                    <div class="logo">
    
                        <img src="{{asset('/img/Logo-3.svg')}}" width="60px" class="logo__img" alt="logo">
                        <a href="/" class="text-decoration-none">RIPOX STORE</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="topup category--1" style="justify-content: center;">
        <div style=" display: flex;
        justify-content: center;
        flex-direction: row;">
        <div class="card card-topup col-lg-4"style="padding:20px;">
            <div class="card-body">
                <form method="post" action="{{ route('login.perform') }}">
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                 
                    <h1 style="margin-bottom: 20px; text-align:center;">Login Admin</h1>

                    @include('layouts.alert')

                    <div class="input-group col" style="margin-bottom:20px;">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    
                    <div class="input-group col" style="margin-bottom:20px;">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>

                    <button class="w-100 btn btn-lg btn-blog header" type="submit" style="color:white">Login</button>
                </form>
    
            </div>
        </div>
        </div>
    </section>
<br><br><br><br>
<!-- Footer -->
@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<script src="./vendor/slick/slick.min.js"></script>
<script src="./js/app.js"></script>
@yield('scripts')
</body>

</html>
