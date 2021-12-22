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

<?php include_once('../header.php') ?>

<!-- Slider Start -->
<section class="section appoinment">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<label>Esportes</label>
			</div>
			<div class="col-md-3 py-3">
				<a href="cadastro.php" class="btn btn-main btn-round-full">Cadastrar esporte</a>
			</div>
			<?php include_once('../loading.php') ?>
			<table id="tableDoadores" name="tableDoadores" style="display:none" class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome esporte</th>
						<th class="text-center" scope="col">#</th>
						<th class="text-center" scope="col">#</th>
						<th class="text-center" scope="col">#</th>
					</tr>
				</thead>
				<tbody id="tbodyList">
				</tbody>
			</table>
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

   

    <!-- 
    Essential Scripts
    =====================================-->

    
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

		<script>

			setTimeout(loader, 2000);

			function loader(){
				var config = {
          method: 'get',
          url: 'https://sportsfree-dev.herokuapp.com/esporte',
          headers: { }
        };

        axios(config)
        .then(function (response) {
					for (var i = 0; i < response.data.length; i++) {
          	$("#tableDoadores").find('tbody').append(`<tr><th scope='row'>${response.data[i].id}</th>
						<td>${response.data[i].nome}</td>
						<td class='text-center'><a class='btn btn-main btn-round-full' href='visualizar.php?id=${response.data[i].id}'>Visualizar</a></td>
						<td class='text-center'><a class='btn btn-main btn-round-full' href='editar.php?id=${response.data[i].id}'>Editar</a></td>
						<td class='text-center'><button class='btn btn-main btn-round-full excluirEsportes' onclick='excluirEsportes("${response.data[i].id}")' >Excluir</button></td></tr>`);
						$("#tableDoadores").css('display','');
						$("#loadingPage").css('display','none');
					}
        })
        .catch(function (error) {
					$("#errorPage").css('display','');
					$("#loadingPage").css('display','none');
          console.log(error);
        });
			}			
			
			function excluirEsportes(id){
				var config = {
					method: 'delete',
					url: 'https://sportsfree-dev.herokuapp.com/esporte/'+id,
					headers: { }
				};
				axios(config)
        .then(function (response) {
					$("#tbodyList").empty();
					loader();
					alert('excluido com sucesso');					
				})
        .catch(function (error) {
					$("#loadingPage").css('display','none');
          console.log(error);
        });
			}


		</script>

  </body>
  </html>
   