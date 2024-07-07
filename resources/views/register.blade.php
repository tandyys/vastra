<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Style/regStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="/assets/1.png" type="image/x-icon">
    <style>
        body {
            background-image: url('/assets/imgReg.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container pt-4 bg-white">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <h1 class="logTitle">VASTRA</h1>
            <div class="input-box">
                <input type="text" @error('name') is-invalid @enderror placeholder="Name" name="name" id="name">
                <i class='bx bxs-user'></i>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-box">
                <input type="text" @error('email') is-invalid @enderror placeholder="Email" name="email" id="email">
                <i class='bx bxs-envelope' ></i>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" @error('password') is-invalid @enderror placeholder="Password" name="password" id="password">
                <i class='bx bxs-lock-alt'></i>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" @error('password_confirmation') is-invalid @enderror placeholder="Confirm Password" name="password_confirmation" id="password_confirmation">
                <i class='bx bxs-lock-alt'></i>
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>