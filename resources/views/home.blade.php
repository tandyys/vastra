<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vastra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Style/navStyle.css">
    <link rel="stylesheet" href="/Style/homeStyle.css">
    <link rel="stylesheet" href="/Style/footStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="/assets/1.png" type="image/x-icon">
</head>
<body>
    @include('partials/navbar')

    <br>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/NewsHome1.png" class="d-block w-100" alt="News 1">
          </div>

          <div class="carousel-item">
            <img src="/assets/NewsHome2.png" class="d-block w-100" alt="News 2">
          </div>

          <div class="carousel-item">
            <img src="/assets/NewsHome3.png" class="d-block w-100" alt="News 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <br>
    <br>

    <div class="content-card">
      <div class="card-brand">
        <h2>Hot News!</h2>
      </div>
      
      <br>
      
      <div class="card-wrapper">
        <div class="card" style="width: 21rem;">
          <img src="/assets/carImg1.png" class="card-img-top" alt="card Img">
          <div class="card-body">
            <h5 class="card-title">Batik in International Fashion Week</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn-card">Read More</a>
          </div>
        </div>
  
        <div class="card" style="width: 21rem;">
          <img src="/assets/cardImg2.png" class="card-img-top" alt="card Img">
          <div class="card-body">
            <h5 class="card-title">Fifa's President with Indonesian Batik</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn-card">Read More</a>
          </div>
        </div>
  
        <div class="card" style="width: 21rem;">
          <img src="/assets/cardImg3.png" class="card-img-top" alt="card Img">
          <div class="card-body">
            <h5 class="card-title">BI Kaltim with "Bebaya Berbatik Nusantara"</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn-card">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>

    <div class="content-stories">
      <div class="card-brand">
        <h2>Favourite Stories</h2>
      </div>
      
      <br>
      
      <div class="card-story1">
        <img src="/assets/cardStory1.png" class="card-img-top" alt="...">
      </div>
      <div class="card-body1">
          <h5 class="card-story-title">MEGAMENDUNG</h5>
          <p class="card-text-desc">This is a story behind the famous batik motif "Megamendung".</p>
          <a href="#" class="btn-card-story">Read the story</a>
      </div>
      
      <br>
      <br>

      <div class="card-body2">
        <h5 class="card-story-title">KAWUNG</h5>
        <p class="card-text-desc">This is a story behind the famous batik motif "Kawung".</p>
        <a href="#" class="btn-card-story">Read the story</a>
      </div>
      <div class="card-story2">
        <img src="/assets/cardStory2.png" class="card-img-bottom" alt="...">
      </div>
    </div>

    <br>
    <br>
    <br>

    <div class="content-product">
      <div class="card-brand">
        <h2>Latest Product</h2>
      </div>

      <br>

      <div class="card text-center">
        <div class="card-header">
          CAUTION
        </div>
        <div class="card-body">
          <h5 class="card-title">Sign in needed!</h5>
          <p class="card-text">to accessing the product page, user should sign into account.</p>
          <div class="btn-caution">
            <a href="/login" class="btn-secondary">Sign In</a>
          </div>
        </div>
        <div class="card-footer text-body-secondary">
          Thank You for your understanding!
        </div>
      </div>
    </div>

    <br>
    <br>

    @include('partials/footer')
</body>
</html>
