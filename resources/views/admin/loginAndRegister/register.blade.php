<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{asset("assetsAdmin/css/login.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <body>
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form method="POST" action="{{route("admin.register.store")}}">
            @csrf
            <h3>Register Here</h3>

            <label for="username">Username</label>
            <input type="text" placeholder="Email or Phone" id="username" name="name">

            <label for="email">Email</label>
            <input type="text" placeholder="Email or Phone" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password">



            <button type="submit">Register</button>
            <div class="other">
                <p>Already have an Accout ? you can register here</p>
                <a href="{{route("admin.login")}}">
                    <button type="button">Login</button>
                </a>
            </div>

        </form>
    </body>
</body>
</html>
