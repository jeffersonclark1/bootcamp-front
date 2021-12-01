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
					<h2 class="mb-2 title-color">Alteracao</h2>
					<p class="mb-4">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
					</p>
            <form id="update" name="update" class="appoinment-form" >
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="nome" id="nome" type="text" class="form-control" placeholder="Nome completo" required>
										<input name="id" id="id" type="hidden">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="email" id="email" type="text" class="form-control" placeholder="E-mail" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="cpf" id="cpf" type="text" class="form-control" placeholder="CPF" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="rg" id="rg" type="text" class="form-control" placeholder="RG" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="cep" id="cep" type="text" class="form-control" placeholder="CEP" required>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="cidadeFake" id="cidadeFake" type="text" class="form-control" placeholder="Cidade" disabled required>
                    <input name="cidade" id="cidade" type="hidden">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="ufFake" id="ufFake" type="text" class="form-control" placeholder="UF" disabled required>
                    <input name="uf" id="uf" type="hidden">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="ruaFake" id="ruaFake" type="text" class="form-control" placeholder="Endereço" disabled required>
                    <input name="rua" id="rua" type="hidden">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="numero" id="numero" type="text" class="form-control" placeholder="Número" required>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="bairroFake" id="bairroFake" type="text" class="form-control" placeholder="Bairro" disabled required>
                    <input name="bairro" id="bairro" type="hidden">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="complemento" id="complemento" type="text" class="form-control" placeholder="Complemento">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-main btn-round-full">Alterar</button>
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
  $(document).ready(function() {
    $('#cpf').mask('999.999.999-99');
    $('#rg').mask('99.999.999-9');
    $('#cep').mask('99999-999');
  });

  loader();

  function loader(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const param = urlParams.get('id')
    $("#id").val(param);
    const config = {
      method: 'get',
      url: 'https://sportsfree-dev.herokuapp.com/professor/'+param,
      headers: { }
    };
    axios(config)
    .then(function (response) {
      $("#nome").val(response.data.nome);
      $("#email").val(response.data.email);
      $("#cep").val(response.data.endereco.cep);
      $("#rg").val(response.data.rg);
      $("#cpf").val(response.data.cpf);
      $("#ufFake").val(response.data.endereco.uf);
      $("#ruaFake").val(response.data.endereco.rua);
      $("#numeroFake").val(response.data.endereco.numero);
      $("#cidadeFake").val(response.data.endereco.cidade);
      $("#bairroFake").val(response.data.endereco.bairro);
      $("#uf").val(response.data.endereco.uf);
      $("#rua").val(response.data.endereco.rua);
      $("#numero").val(response.data.endereco.numero);
      $("#cidade").val(response.data.endereco.cidade);
      $("#bairro").val(response.data.endereco.bairro);
      $("#complemento").val(response.data.endereco.complemento);
    })
    .catch(function (error) {
      console.log(error);
    });
  }

  $("#update").submit(function( event ) {
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
      alert("Professor alterado com sucesso!")
      window.history.go(-1)
    })
    .catch(function (error) {
      console.log(error);
    });

  });

  $("#cep").keyup(function(){
    if($("#cep").val().length === 9){
      const config = {
        method: 'get',
        url: `https://viacep.com.br/ws/${$("#cep").val()}/json/`
      };
      axios(config)
      .then(function (response) {
        $("#cidade").val(response.data.localidade);
        $("#uf").val(response.data.uf);
        $("#rua").val(response.data.logradouro);
        $("#bairro").val(response.data.bairro);
        $("#complemento").val(response.data.complemento);
        $("#cidadeFake").val(response.data.localidade);
        $("#ufFake").val(response.data.uf);
        $("#ruaFake").val(response.data.logradouro);
        $("#bairroFake").val(response.data.bairro);
        $("#complementoFake").val(response.data.complemento);
        $("#numero").focus();
      })
      .catch(function (error) {
        console.log(error);
      });
    }
  });

</script>

</body>
</html>
   