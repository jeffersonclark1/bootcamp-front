<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Esporte para vida toda">
  <meta name="author" content="MBA Impacta">

  <title>Sportfree </title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="../../plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="../../plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../../plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../../css/style.css">

</head>

<body id="top">

<header>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="/">
			  	<img src="images/logo.png" alt="" class="img-fluid w-100">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="/">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="#">Seja um doador</a></li>
         <li class="nav-item"><a class="nav-link" href="#">Contatos</a></li>
         <li class="nav-item"><a class="nav-link" href="#">Saiba mais</a></li>
				 <li class="nav-item"><a class="nav-link btn btn-main btn-round-full text-white" href="#">Login</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	
<!-- Slider Start -->
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ml-auto mr-auto">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Bem-vindo!<br><h4>Informe suas credenciais</h4></h2>
					</p>
            <form id="login" name="login" class="appoinment-form" >
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <input name="username" id="username" type="text" class="form-control" placeholder="Login" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-main btn-round-full">Logar</button>
              <a onclick="window.history.go(-1); return false;" class="btn btn-main btn-round-full">Cancelar</a>
            </form>
        </div>
			</div>
		</div>
	</div>
</section>
<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Sportfree</span> by <a href="#" target="_blank">ES21</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
  
<!-- Main jQuery -->
<script src="../../plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4.3.2 -->
<script src="../../plugins/bootstrap/js/popper.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../../plugins/counterup/jquery.easing.js"></script>
<!-- Slick Slider -->
<script src="../../plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="../../plugins/counterup/jquery.waypoints.min.js"></script>

<script src="../../plugins/shuffle/shuffle.min.js"></script>
<script src="../../plugins/counterup/jquery.counterup.min.js"></script>

<script src="../../js/script.js"></script>
<script src="../../js/contact.js"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

<script>

  $("#login").submit(function( event ) {
    event.preventDefault();
    
    if ( $("#username").val() === "adminsportfree" && $("#password").val() === "passwordadminsport" ){
      window.location.href = "/pages/professores/";
    } else {
      alert("Credenciais inválidas");
      $("#username").val('')
      $("#password").val('')
    }

  });

</script>

</body>
</html>
   