<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

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

<?php include_once('../header.php') ?>
	
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg col-md">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Cadastro</h2>
					<p class="mb-4">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
					</p>
            <form id="create" name="create" class="appoinment-form" >
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="nome" id="nome" type="text" class="form-control" placeholder="Nome do esporte" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="urlImagem" id="urlImagem" type="text" class="form-control" placeholder="Foto do esporte" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea name="descricao" id="descricao" type="text" class="form-control" placeholder="Descricao" required></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-main btn-round-full">Registrar</button>
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
    // Attach a submit handler to the form
    $( "#create" ).submit(function( event ) {
      
      // Stop form from submitting normally
      event.preventDefault();

      const param = {
        "nome": $("#nome").val(),
        "descricao": $("#descricao").val(),
        "urlImagem": $("#urlImagem").val()
      };

      const config = {
        method: 'POST',
        url: 'https://sportsfree-dev.herokuapp.com/esporte',
        data: param
      };

      axios(config)
      .then(function (response) {
        alert('Esporte cadastrado com sucesso!');
        window.history.go(-1)
      })
      .catch(function (error) {
        console.log(error);
      });       

    });

  </script>

  </body>
  </html>
   