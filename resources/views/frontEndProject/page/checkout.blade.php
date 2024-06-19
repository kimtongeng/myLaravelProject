<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset("assetsFrontEnd/css/cheakout.css")}}">

</head>
<body>
    <div class="navbar">
        <div class="container">
            <div class="header">
                <div class="left">
                    <i class="fa-solid fa-lock"></i>
                    <p>
                        Secure checkout
                    </p>
                </div>
                <div class="center">
                    <a href="">
                        ULTRAWATCH
                    </a>
                </div>
                <div class="right">
                    <p>Need Help?</p>
                    <a href="">
                        <i class="fa-solid fa-phone"></i>
                        <p>+855 964136572</p>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="{{route("checkout.create")}}" method="post">
            @csrf
        <div class="payment">
            <div class="info">
                <div class="title">Add your delivery address</div>
                <div class="required">* Required fields</div>

                <div class="form-select-country">
                    <label for="">Country/region</label>
                    <select name="country" id="">
                        <option value="cambodia">Cambodia</option>
                        <option value="japan">Japan</option>
                    </select>
                </div>
                <div class="form-input-address">
                    <label for="">Address</label>
                    <input type="text" name="address">
                </div>

                <div class="city-state">
                    <div class="form-input">
                        <label for="">City</label>
                        <input type="text" name="city">
                    </div>
                    <div class="form-input">
                        <label for="">State</label>
                        <input type="text" name="state">
                    </div>
                </div>
                <div class="form-input-postal">
                    <label for="">Postal or zip code</label>
                    <input type="text" name="postal_code">
                </div>
                <div class="phone">
                    <div class="form-input">
                        <label for="">Country calling code</label>
                        <select id="" name="calling_code">
                            <option value="+855">+855</option>
                            <option value="+1">+1</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <label for="">Phone</label>
                        <input type="text" name="phone">
                    </div>

                </div>
            </div>
            <div class="summary">
                <div class="title">Summary</div>
                <div class="product-list">

                    @foreach ($cart as $item)
                        <div class="product">
                            <img src="{{asset("image/".$item["img"])}}" alt="">
                            <div class="price-brand">
                                <div class="brand">{{$item["brand"]}}</div>
                                <div class="price">${{$item["price"]}}</div>
                            </div>
                        </div>
                    @endforeach


                    <div class="delivery">
                        <p>Estimated delivery</p>
                        <p>$24,00</p>
                    </div>
                    <hr>
                    <div class="total">
                        <p>Total</p>
                        <p>USD <span>${{$total}}</span></p>
                    </div>
                    <button class="save-pay" type="submit">PAY NOW</button>

                    <nav>
                        By registering your details you agree to our <a href=""> Terms and Conditions</a> and <a href=""> Privacy and Cookie Policy</a>
                    </nav>
                </div>
            </div>
        </div>
    </form>
    </div>



</body>
</html>
