

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset("assetsFrontEnd/css/style.css")}}">

</head>
<body>

    <div class="navbar">
        <div class="container">
            <div class="header">
                <div class="left">
                    <a href="{{route("shop.index")}}">Home</a>
                    <p><i class="fa-solid fa-angle-right"></i>Type Of Watch</p>
                    <div class="sub-type">
                        <a href="{{route("shop.type",["type"=>"women"])}}">Womenswear</a>
                        <a href="{{route("shop.type",["type"=>"men"])}}">Menswear</a>

                    </div>

                </div>
                <div class="center">
                    <a href="{{route("shop.index")}}">
                        UltraWatch
                    </a>
                </div>
                <div class="right">
                    <a href="" class="globe">
                        <i class="fa-solid fa-globe"></i>
                    </a>


                    @if (Route::has('login'))

                        @auth
                            <a href="" class="profile">
                                <i class="fa-regular fa-user"></i>
                                <div class="sub-profile">
                                    <div class="name">
                                        {{ Auth::user()->name }}
                                    </div>
                                    <a href="{{route("shop.order")}}"><div class="name">Order History</div></a>

                                    <form method="POST" action="{{route("logout")}}">
                                        @csrf
                                        <button type="submit">Log Out</button>
                                    </form>
                                </div>

                            </a>
                        @else
                            <a
                                href="" class="user"
                            >
                                Log in
                            </a>
                        @endauth

                @endif


                    <a href="" class="bronze">
                        Bronze
                    </a>
                    <a href="" class="heart">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                    <a href="{{route("cart.index")}}" class="cart">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <div class="dot">{{count((array) session("cart"))}}</div>
                    </a>
                </div>
            </div>

            <div class="sub-header">
                <div class="brand">
                    @foreach ($uniqueWatchesBrand as $watch)
                        <a href="{{url("/brand/".$watch->brand)}}">{{$watch->brand}}</a>
                    @endforeach
                    {{-- <a href="./page/rolex.html">Rolex</a>
                    <a href="">Patek Philippe</a>
                    <a href="">Audemars Piguet</a>
                    <a href="">Omega</a>
                    <a href="">Jaeger-LeCoultre</a> --}}
                </div>
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>
    </div>

    <div class="session">
        <div class="container">
            <h1 class="title" style="text-transform: uppercase;">
                @if ($type&&$brand)
                    {{$brand}} for {{$type}}
                @elseif ($type)
                    Watches for {{$type}}
                @else
                    {{$brand}} for you
                @endif

            </h1>
            @if ($brand)
                <div class="gender">
                    <a href="{{route("shop.typeBrand",["brand"=>$brand,"type"=>"women"])}}"
                        @if ($type == "women")
                            class="broder-bottom"
                        @endif
                        >SHOP WOMEN</a>
                    <a href="{{route("shop.typeBrand",["brand"=>$brand,"type"=>"men"])}}"
                        @if ($type == "men")
                            class="broder-bottom"
                        @endif
                        >SHOP MEN</a>
                </div>
            @endif

            <div class="list-product">

                @foreach ($brandWatch as $watch)
                <div class="product">
                    <div class="favorite">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a href="{{route("shop.show",["id"=>$watch->id])}}">

                        <div class="image">
                            <img src="{{asset("image/".$watch->image)}}" alt="">
                        </div>

                        <div class="available">
                            {{$watch->available}}
                        </div>
                        <div class="brand">
                            {{$watch->brand}}
                        </div>
                        <div class="name">
                            {{$watch->name}}
                        </div>
                        <div class="price">${{$watch->price}}</div>

                    </a>
                </div>
            @endforeach

            </div>
        </div>
    </div>
    {{session("message")}}

    <div class="footer">
        <div class="container">
            <div class="service">
                <div class="title">
                    Customer Service
                </div>
                <a href="">Contact us</a>
                <a href="">FAQs</a>
                <a href="">Orders and delivery</a>
                <a href="">Returns and refunds</a>
                <a href="">Payment and pricing</a>
                <a href="">Cryptocurrency payments</a>
                <a href="">Promotion terms and conditions</a>
                <a href="">ULTRAWATCH Customer Promise</a>
            </div>
            <div class="about">
                <div class="title">About ULTRAWATCH</div>
                <a href="">About us</a>
                <a href="">Investors</a>
                <a href="">ULTRAWATCH partner boutiques</a>
                <a href="">Careers</a>
                <a href="">ULTRAWATCH app</a>
                <a href="">Modern slavery statement</a>
            </div>
            <div class="discounts">
                <div class="title">Discounts and membership</div>
                <a href="">Affiliate program</a>
                <a href="">ULTRAWATCH membership</a>
                <a href="">Student Beans and Graduates</a>
                <div class="follow-us">
                    <div class="title">Follow Us</div>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-pinterest"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="login">
        <div class="background">
            <form action="{{route("register")}}" method="POST" class="registerForm" >
                @csrf
                <div class="register-form"

                >
                    <div class="exit-icon"><i class="fa-solid fa-xmark"></i></div>
                    <h1>Register</h1>
                    <div class="form-input">
                      <label for="">Username</label>
                      <input type="text" placeholder="Enter Username" name="name">
                    </div>

                    <div class="form-input">
                        <label for="">Email</label>
                        <input type="text" placeholder="Enter Email" name="email">
                        @if ($errors->get('email'))
                            @foreach ($errors->get('email') as $error)
                            <span class="mt-1">{{$error}}</span>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-input">
                        <label for="">Password</label>
                            <div class="input-password">
                                <input type="password" placeholder="Enter Password" name="password">
                                <div class="showPassword"><i class="fa-regular fa-eye-slash"></i></div>
                            </div>
                        @if ($errors->get('password'))
                            @foreach ($errors->get('password') as $error)
                            <span class="mt-1">{{$error}}</span>
                            @endforeach
                        @endif

                    </div>
                    <div class="form-input">
                        <label for="">Confirm Password</label>
                            <div class="input-password">

                                <input type="password" placeholder="Enter confirm Password" name="password_confirmation">
                                <div class="showPassword"><i class="fa-regular fa-eye-slash"></i></div>
                            </div>


                    </div>
                    <button type="submit" class="submit">Register</button>
                    <p>Do you all ready have an account?You can login here</p>
                    <button type="button" class="btnLogin">Login</button>
                </div>
            </form>

            <form action="{{ route('login') }}" method="POST" class="loginForm">
                @csrf
                <div class="login-form">
                    <div class="exit-icon"><i class="fa-solid fa-xmark"></i></div>
                    <h1>Login</h1>

                    <div class="form-input">
                        <label for="">Email</label>
                        <input type="text" placeholder="Enter Email" name="email">
                        @if ($errors->get('password'))
                            @foreach ($errors->get('password') as $error)
                            <span class="mt-1">{{$error}}</span>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-input">
                        <label for="">Password</label>
                            <div class="input-password">
                                <input type="password" placeholder="password" name="password" placeholder="Enter Password">
                                <div class="showPassword"><i class="fa-regular fa-eye-slash"></i></div>
                            </div>

                        @if ($errors->get('password'))
                            @foreach ($errors->get('password') as $error)
                                <span class="mt-1">{{$error}}</span>
                            @endforeach
                        @endif
                    </div>
                    <button type="submit" class="submit" >Login</button>
                    <p>Don't have an account?You can register here</p>
                    <button type="button" class="btnRegister">Register</button>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="{{asset("assetsFrontEnd/js/script.js")}}"></script>
</html>