<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Style/logStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="/assets/1.png" type="image/x-icon">
    <style>
        body {
            background-image: url('/assets/imgLogin.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body style="background-color: #f5f5f5">
    <div class="container pt-4">
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <h1 class="logTitle">VASTRA</h1>
            <div class="input-box">
                <input type="text" @error('email') is-invalid @enderror placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                <i class='bx bxs-envelope' ></i>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" @error('password') is-invalid @enderror placeholder="Password" name="password" id="password" value="{{ old('password') }}">
                <i class='bx bxs-lock-alt'></i>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account? 
                    <a href="/register">Register</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>