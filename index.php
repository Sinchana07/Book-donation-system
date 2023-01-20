<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BooksApp using PHP and mysql</title>
    <!--bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <!--font awesome link-->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!--css file-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <!--navbar-->
   <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo1.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>      
          <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>1</sup></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
</li>
</ul>
</nav>

<!--third child-->
<div class="bg-light">
    <h3 class="text-center">BooksApp</h3>
    <p class="text-center">Sharing of knowledge to needy is the way to reach almighty</p>
</div>
<!--Fourth child-->
<div class="row">
    <div class="col md-5">
        <!--products-->
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/hcverma.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More info</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/dbms.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More info</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/up.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More info</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/up.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More info</a>
  </div>
</div>
            </div>
            
            <div class="col-md-4">
            <div class="card">
  <img src="./images/up.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More info</a>
  </div>
</div>
</div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/up.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More info</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/up.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More info</a>
  </div>
</div>
            </div>
            </div>
</div>
            <div class="col-md-1"></div>           
    <div class="col-md-3 bg-secondary p-0">
      <!--Publications to be displayed-->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>Publications</h4></a>
</li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">Cingage</a>
</li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">MTG</a>
</li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">Allen</a>
</li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">Computer Society</a>
</li>
</ul>
<!--Categories to be displayed-->
<ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
</li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">DBMS</a>
</li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">UP</a>
</li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">Physics</a>
</li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">Python</a>
</li>
</ul>
    </div>
</div>


<!--last child-->
<div class="bg-info p-3 text-center">
    <p>All rights are reserved -Designed by Sinchu-2023</p>
</div>
</div>
<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous">
</script>
</body>
</html>