<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/Style/navStyle.css">
        <!-- CSS -->
        <link rel="stylesheet" href="/Style/product.css">
        <link rel="stylesheet" href="/Style/footStyle.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="/assets/1.png" type="image/x-icon">
    </head>
    <body>
        @include('partials/navbarAuth')

        <br>

        <div class="container">
            <h1>Hot Items!</h1>
            <div class="products">
                <div class="product">
                    <img src="/assets/batik.webp">
                    <div class="left">
                        <h3>Deimos R1</h3>
                        <p>275.000 -> 111.000</p>
                    </div>
                    <div class="right">
                        <a href="/cart"><button type="submit">Buy</button></a>
                    </div>
                </div>

                <div class="product">
                    <img src="/assets/batik.webp">
                    <div class="left">
                        <h3>Deimos R1</h3>
                        <p>275.000 -> 111.000</p>
                    </div>
                    <div class="right">
                        <a href="/cart"><button type="submit">Buy</button></a>
                    </div>
                </div>

                <div class="product">
                    <img src="/assets/batik.webp">
                    <div class="left">
                        <h3>Deimos R1</h3>
                        <p>275.000 -> 111.000</p>
                    </div>
                    <div class="right">
                        <a href="/cart"><button type="submit">Buy</button></a>
                    </div>
                </div>

                <div class="product">
                    <img src="/assets/batik.webp">
                    <div class="left">
                        <h3>Deimos R1</h3>
                        <p>275.000 -> 111.000</p>
                    </div>
                    <div class="right">
                        <a href="/cart"><button type="submit">Buy</button></a>
                    </div>
                </div>
            </div>
        </div>

    <br>
    <br>
    
    @include('partials/footer')
    </body>
</html>