<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Free Car template, with Bootstrap 4" />
    <meta name="google" content="nositelinkssearchbox">
    <meta name="authors" content="@AbrahamRajoRodriguez, @AntonioMartinSosa"/>
    <title>Car Template</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/index.js') }}" defer></script>


</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Car templete</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="background-main">
    <main class="main">
        <h1 class="main-title">Car is
            <a href="" class="typewrite" data-period="3000" data-type='[ "Creative", "Future", "Enterteinment", "Freedom" ]'>
                <span class="wrap"></span>
            </a>
        </h1>
    </main>
    <div class="text-center">
        <a class="main-link btn btn-lg"  href="">
            See more
            <i class="fa fa-chevron-down"></i>
        </a>
    </div>
</header>

<section class="about-us" id="about">
    <div class="container">
        <div class="text-center">
            <h2>About</h2>
            <div class="line-shape"></div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dolorum itaque quisquam assumenda maxime recusandae doloremque explicabo necessitatibus illum facere, numquam nemo iste at. Sint laborum vel soluta sequi id!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat animi, aut eius labore eligendi delectus magni autem mollitia aliquam rem excepturi fuga laboriosam sapiente quas itaque ratione, dolorem iste ad?
            </p>
        </div>
    </div>
</section>
<br>
<section class="services-class" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <div class="line-shape"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
                    <h3 class="mb-3">Sturdy Templates</h3>
                    <p class="text-muted mb-0">Our templates are updated regularly they don't break.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
                    <h3 class="mb-3">Ready to Ship</h3>
                    <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
                    <h3 class="mb-3">Up to Date</h3>
                    <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
                    <h3 class="mb-3">Made with Love</h3>
                    <p class="text-muted mb-0">You have to make your websites with love these days!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div class="container text-center" id="portfolio">
    <h2 class="portfolio-title">Portfolio</h2>
    <div class="line-shape"></div>
</div>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{ asset('images/portfolio/p-1.jpeg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">For those about to rock...</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{ asset('images/portfolio/p-2.jpeg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">We salute you!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{ asset('images/portfolio/p-3.jpeg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Let there be rock!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact us</h2>
                <div class="line-shape"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat harum incidunt id quas, facere amet modi quisquam, voluptate ad dolores soluta molestias rerum excepturi delectus mollitia porro, adipisci eveniet qui!</p>
            </div>
        </div>
    </div>
    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="exampleInputUsername">Your name</label>
                        <label for=""></label><input type="text" class="form-control" id="" placeholder=" Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Mobile No.</label>
                        <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for ="description"> Message</label>
                        <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                </div>
            </div>
        </form>
    </div>
</section>
<br>
<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
                    <i class="fab fa-github"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Your Website 2018</p>
    </div>
</footer>
<br>
</body>
</html>
