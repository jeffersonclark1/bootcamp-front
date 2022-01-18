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
		<div class="row align-items-center">
			<div class="col-lg col-md">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Visualização</h2>
					</p>
            <form id="update" name="update" class="appoinment-form" >
            <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="descricao" id="descricao" type="text" class="form-control" placeholder="Descrição" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-lg-6">
                  <div class="form-group">
                    <input name="esporte" id="esporte" type="text" class="form-control" placeholder="Esporte" disabled>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="professor" id="professor" type="text" class="form-control" placeholder="professor" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="cepFake" id="cepFake" type="text" class="form-control" placeholder="CEP" disabled  >
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="cidadeFake" id="cidadeFake" type="text" class="form-control" placeholder="Cidade" disabled >
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="ufFake" id="ufFake" type="text" class="form-control" placeholder="UF" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="ruaFake" id="ruaFake" type="text" class="form-control" placeholder="Endereço" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="numeroFake" id="numeroFake" type="text" class="form-control" placeholder="Número" disabled>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="bairroFake" id="bairroFake" type="text" class="form-control" placeholder="Bairro" disabled>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="complementoFake" id="complementoFake" type="text" class="form-control" placeholder="Complemento" disabled >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <input name="dia" id="dia" type="text" class="form-control" placeholder="Dia" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <input name="horarioInicio" id="horarioInicio" type="text" class="form-control" placeholder="Inicio" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                      <input name="horarioFim" id="horarioFim" type="text" class="form-control" placeholder="Fim" disabled>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <input class="form-control" type="number" name="quantidadeMaxAlunos" id="quantidadeMaxAlunos" placeholder="Max de alunos" disabled min="5" max="99">
                  </div>
                </div>
              </div>
              <button  onclick="window.history.go(-1); return false;" class='btn btn-main btn-round-full' type="button">Voltar</button>
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
				const queryString = window.location.search;
				const urlParams = new URLSearchParams(queryString);
				const param = urlParams.get('id')
				$("#id").val(param);
				const config = {
          method: 'get',
          url: 'https://sportsfree-dev.herokuapp.com/curso/'+param,
          headers: { }
        };
        axios(config)
        .then(function (response) {
					$("#descricao").val(response.data.descricao);
					$("#esporte").val(response.data.esporte.nome);
					$("#professor").val(response.data.professor.nome);
					$("#rg").val(response.data.rg);
					$("#cepFake").val(response.data.local.cep);
					$("#ufFake").val(response.data.local.uf);
					$("#ruaFake").val(response.data.local.rua);
					$("#numeroFake").val(response.data.local.numero);
					$("#cidadeFake").val(response.data.local.cidade);
					$("#bairroFake").val(response.data.local.bairro);
					$("#complementoFake").val(response.data.local.complemento);
          $("#dia").val(response.data.dia);
          $("#horarioInicio").val(response.data.horarioInicio);
          $("#horarioFim").val(response.data.horarioFim);
          $("#quantidadeMaxAlunos").val(response.data.quantidadeMaxAlunos);
        })
        .catch(function (error) {
          console.log(error);
        });
			}

			$( "#update" ).submit(function( event ) {

        event.preventDefault();
				const data = {
					"id": $("#id").val(),
					"nome": $("#nome").val(),
					"email": $("#email").val(),
					"cpf": $("#cpf").val(),
					"rg": $("#rg").val(),
					"endereco": {
							"cep": $("#cep").val(),
							"cidade": $("#cidade").val(),
							"uf": $("#uf").val(),
							"rua": $("#rua").val(),
							"numero": $("#numero").val(),
							"bairro": $("#bairro").val(),
							"complemento": $("#complemento").val()
					}
				}

        const config = {
          method: 'put',
					url: 'https://sportsfree-dev.herokuapp.com/professor',
					headers: { 
						'Content-Type': 'application/json'
					},
					data : data
        };

        axios(config)
        .then(function (response) {
          console.log(JSON.stringify(response.data));
        })
        .catch(function (error) {
          console.log(error);
        });

      });

		</script>

  </body>
  </html>
   