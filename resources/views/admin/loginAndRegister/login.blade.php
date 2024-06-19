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

        <form method="POST" action="{{route("admin.login.authenticate")}}">
            @csrf
            <h3>Login Here</h3>

            <label for="username">Username</label>

            <input type="text" placeholder="Email or Phone" id="username" name="email">

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password">

            <button>Log In</button>
            <div class="other">
                <p>don't have an Accout ? you can register here</p>
                <a href="{{route("admin.register")}}">
                    <button type="button">Register</button>
                </a>
            </div>
        </form>
    </body>
</body>
</html>
