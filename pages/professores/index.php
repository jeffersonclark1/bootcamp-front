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

<header>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="../../images/logo.png" alt="" class="img-fluid w-50">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.html">Seja um doador</a></li>
         <li class="nav-item"><a class="nav-link" href="about.html">Contatos</a></li>
         <li class="nav-item"><a class="nav-link" href="about.html">Saiba mais</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	



<!-- Slider Start -->
<section class="section appoinment">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<label>Professores</label>
			</div>
			<div class="col-md-3 py-3">
				<a href="cadastro.php" class="btn btn-main btn-round-full">Cadastrar professor</a>
			</div>				
			<table id="tableProfessores" name="tableProfessores" class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome professore</th>
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

			loader();

			function loader(){
				var config = {
          method: 'get',
          url: 'https://sportsfree-dev.herokuapp.com/professor',
          headers: { }
        };

        axios(config)
        .then(function (response) {
					// for ( var i ; i < response.data.lenght ; i++ ){
					// 	console.log(response.data[i]);
					// }
					for (var i = 0; i < response.data.length; i++) {
          	$("#tableProfessores").find('tbody').append(`<tr><th scope='row'>${response.data[i].id}</th>
						<td>${response.data[i].nome}</td>
						<td class='text-center'><a class='btn btn-main btn-round-full' href='visualizar.php?id=${response.data[i].id}'>Visualizar</a></td>
						<td class='text-center'><a class='btn btn-main btn-round-full' href='editar.php?id=${response.data[i].id}'>Editar</a></td>
						<td class='text-center'><button class='btn btn-main btn-round-full excluirProfessor' onclick='excluirProfessor("${response.data[i].id}")' >Excluir</button></td></tr>`);
						// more statements
					}
        })
        .catch(function (error) {
          console.log(error);
        });
			}			
			
			function excluirProfessor(id){
				var config = {
					method: 'delete',
					url: 'https://sportsfree-dev.herokuapp.com/professor/'+id,
					headers: { }
				};
				axios(config)
        .then(function (response) {
					$("#tbodyList").empty();
					loader();
					alert('excluido com sucesso');					
				})
        .catch(function (error) {
          console.log(error);
        });
			}


		</script>

  </body>
  </html>
   