<?php
session_start();
if(isset($_SESSION['online']) && $_SESSION['online'] == "yes" && isset($_COOKIE['online']))
{
    header('location: main.php');
    exit();
}

require_once ('config\config.php');
?>

<!DOCTYPE html>
<html lang="pl">
<head>

     <title>Serwis Komputerowy Click - Lublin</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="Serwis Komputerowy">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/mystyle.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/login_css.css">
	<link rel="stylesheet" type="text/css" href="css/main_css.css">
    <link rel="stylesheet" href="css/tooplate-ben-resume-style.css">
    <link rel="icon" href="images/cropped-icon-32x32.png" sizes="32x32" />
    <script src="/js/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- menu -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a class="" href="#" style="color: silver">Serwis Komputerowy Click - Lublin</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a href="../index.php" class="nav-link smoothScroll">Strona g????wna</a>
                    </li>

                    <li class="nav-item">
                        <a href="../index.php" class="nav-link smoothScroll">O nas</a>
                    </li>

                    <li class="nav-item">
                        <a href="../index.php" class="nav-link smoothScroll">Nasi pracownicy</a>
                    </li>

                    <li class="nav-item">
                        <a href="../index.php" class="nav-link smoothScroll">Kontakt</a>
                    </li>

                    <li class="nav-item">
                        <a href="register.php" class="nav-link smoothScroll">Rejestracja</a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>
<!-- wejsciowka -->
    <div class="containerh">
  <img src="images/tlo7.jpg" class="imageh">
  <div class="overlayh"><h2>Click - Logowanie</h2>
</div>
</div>

    <section class="about section-padding col-md-4 offset-md-4" id="about">
      
					<form class="login100-form validate-form" action="action\log_in.php" method="post">
  
	  
	  <?php
if (isset($_SESSION['alert']))
{
	echo $_SESSION['alert'];
	unset($_SESSION['alert']);
}
?>

<div class='col-md-10 offset-md-1'>
					<div class="wrap-input100 validate-input m-t-10 m-b-25" data-validate = "Podaj login">
						<input class="input100" type="text" name="username" placeholder="Login">
					</div>

					<div class="wrap-input100 validate-input m-b-25" data-validate="Podaj has??o">
						<input class="input100" type="password" name="password" placeholder="Has??o">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn col-md-8 offset-md-0" type="Submit">
							Zaloguj si??
						</button>

					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	  
    </section>

    <!-- onas -->
    <section class="testimonials section-padding" id="testimonials">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                        <h3 class="mb-5 text-center">Nasz zesp????</h3>

                        <div class="owl-carousel owl-theme" id="testimonials-carousel">
                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="images/testimonials/testimonial-image01.jpg" class="img-fluid">
                                    </div>
                                    <div class="testimonials-info">
                                        <p>Cz??owiek od zada?? specjalnych. Zlokalizuje ka??d?? usterk?? elektroniczn??.</p>
                                        <h6 class="mb-0">Patryk</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="images/testimonials/testimonial-image02.jpg" class="img-fluid" >
                                    </div>
                                    <div class="testimonials-info">
                                        <p>Komputery to jego pasja od zawsze. Jest specjalist?? w ka??dym calu.</p>
                                        <h6 class="mb-0">Marcin</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="images/testimonials/testimonial-image04.jpg" class="img-fluid">
                                    </div>
                                    <div class="testimonials-info">
                                        <p>Jej umiej??tno??ci znane s?? w ca??ym Lublinie.</p>
                                        <h6 class="mb-0">Aldona</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="images/testimonials/testimonial-image03.jpg" class="img-fluid">
                                    </div>
                                    <div class="testimonials-info">
                                        <p>Elektronika nie ma przed nim ??adnych tajemnic. </p>
                                        <h6 class="mb-0">Dawid</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
          </div>
     </section>


    <section class="contact section-padding pt-0" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <form action="#" method="get" class="contact-form webform"  role="form">

                        <div class="form-group d-flex flex-column-reverse">
                            <input type="text" class="form-control" name="cf-name" id="cf-name" placeholder="">

                            <label for="cf-name" class="webform-label">Imi?? i Nazwisko</label>
                        </div>

                        <div class="form-group d-flex flex-column-reverse">
                            <input type="email" class="form-control" name="cf-email" id="cf-email" placeholder="">

                            <label for="cf-email" class="webform-label">Adres Email</label>
                        </div>

                        <div class="form-group d-flex flex-column-reverse">
                            <textarea class="form-control" rows="5" name="cf-message" id="cf-message" placeholder=""></textarea>

                            <label for="cf-message" class="webform-label">Tre????</label>
                        </div>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Wy??lij</button>
                    </form>
                </div>
                <div class="mx-auto col-lg-4 col-md-6 col-12">
                    <h2 class="my-4 pt-4 pt-lg-0">Serwis Komputerowy "Click" - Lublin</h2>
                    <p class="mb-1">ul. Bohdana Dobrza??skiego 1</p>
                    <p class="mb-1">20-262 Lublin</p>
                    <p class="mb-1">+48-123-456-789</p>
                    <p class="mb-1">kontakt@click-lublin.pl</p>
                    <p class="copyright-text mt-5 pt-3">Copyright &copy; M.R & P.S - WSPA 2022-2023</p>

                </div>
            </div>
        </div>
    </section>
     <!-- scrypty js -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>