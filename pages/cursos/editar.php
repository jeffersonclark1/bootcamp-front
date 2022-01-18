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
					<h2 class="mb-2 title-color">Alteração</h2>
					</p>
            <form id="update" name="update" class="appoinment-form" >
            <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="descricao" id="descricao" type="text" class="form-control" placeholder="Descrição" required>
                    <input name="id" id="id" type="hidden" required>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-lg-6">
                  <div class="form-group">
                    <select class="form-control" name="esporte" id="esporte" required>
                      <option value="" disabled selected>Selecione um esporte</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <select class="form-control" name="professor" id="professor" required>
                    <option value="" disabled selected>Selecione um professor</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="cep" id="cep" type="text" class="form-control" placeholder="CEP" required  >
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="cidadeFake" id="cidadeFake" type="text" class="form-control" placeholder="Cidade" disabled >
                    <input name="cidade" id="cidade" type="hidden" required>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="ufFake" id="ufFake" type="text" class="form-control" placeholder="UF" disabled>
                    <input name="uf" id="uf" type="hidden" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="ruaFake" id="ruaFake" type="text" class="form-control" placeholder="Endereço" disabled>
                    <input name="rua" id="rua" type="hidden" required>
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
                    <input name="bairroFake" id="bairroFake" type="text" class="form-control" placeholder="Bairro" disabled>
                    <input name="bairro" id="bairro" type="hidden" required>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input name="complemento" id="complemento" type="text" class="form-control" placeholder="Complemento" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <select class="form-control" name="dia" id="dia" required>
                    <option value="" disabled selected>Selecione um dia</option>
                    <option value="Segunda">Segunda</option>
                    <option value="Terça">Terça</option>
                    <option value="Quarta">Quarta</option>
                    <option value="Quinta">Quinta</option>
                    <option value="Sexta">Sexta</option>
                    <option value="Sábado">Sábado</option>
                    <option value="Domingo">Domingo</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <select class="form-control" name="horarioInicio" id="horarioInicio" required>
                    <option value="" disabled selected>Horário início</option>
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>3
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <select class="form-control" name="horarioFim" id="horarioFim" required>
                    <option value="" disabled selected>Horário término</option>
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <input class="form-control" type="number" name="quantidadeMaxAlunos" id="quantidadeMaxAlunos" placeholder="Max de alunos" required min="5" max="99">
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
  $(document).ready(async function() {
    $('#cpf').mask('999.999.999-99');
    $('#rg').mask('99.999.999-9');
    $('#cep').mask('99999-999');
    $('#telefone').mask('(99) 9 9999-9999');

    await loader();
    await loaderEsporte();
    await loaderProfessor();
  });

  let esporte = "";
  let professor = "";

  async function loader(){
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
      $("#id").val(response.data.id);
      $("#descricao").val(response.data.descricao);
      esporte = response.data.esporte.id;
      professor = response.data.professor.id;
      $("#professor").val(response.data.professor.id).prop('selected',true);
      $("#cep").val(response.data.local.cep);
      $("#cep").val(response.data.local.cep);
      $("#ufFake").val(response.data.local.uf);
      $("#ruaFake").val(response.data.local.rua);
      $("#numeroFake").val(response.data.local.numero);
      $("#cidadeFake").val(response.data.local.cidade);
      $("#bairroFake").val(response.data.local.bairro);
      $("#uf").val(response.data.local.uf);
      $("#rua").val(response.data.local.rua);
      $("#numero").val(response.data.local.numero);
      $("#cidade").val(response.data.local.cidade);
      $("#bairro").val(response.data.local.bairro);
      $("#complemento").val(response.data.local.complemento);
      $("#dia").val(response.data.dia).prop('selected',true);
      $("#horarioInicio").val(response.data.horarioInicio).prop('selected',true);
      $("#horarioFim").val(response.data.horarioFim).prop('selected',true);
      $("#quantidadeMaxAlunos").val(response.data.quantidadeMaxAlunos);
    })
    .catch(function (error) {
      console.log(error);
    });
  }

  $("#update").submit(function( event ) {
    event.preventDefault();
    const param = {
      "id": $("#id").val(),
      "descricao": $("#descricao").val(),
      "professor": {
        "id": Number($("#professor").val()),
      },
      "esporte" : {
        "id": Number($("#esporte").val()),
      },
      "local": {
        "cep": $("#cep").val(),
        "cidade": $("#cidade").val(),
        "uf": $("#uf").val(),
        "rua": $("#rua").val(),
        "numero": $("#numero").val(),
        "bairro": $("#bairro").val(),
        "complemento": $("#complemento").val()
      },
      "dia": $("#dia").val(),
      "horarioInicio": $("#horarioInicio").val(),
      "horarioFim": $("#horarioFim").val(),
      "quantidadeMaxAlunos": Number($("#quantidadeMaxAlunos").val())
    };

    const config = {
      method: 'put',
      url: 'https://sportsfree-dev.herokuapp.com/curso',
      headers: { 
        'Content-Type': 'application/json'
      },
      data : param
    };

    axios(config)
    .then(function (response) {
      alert("Curso alterado com sucesso!")
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

  async function loaderEsporte(){
    var config = {
      method: 'get',
      url: 'https://sportsfree-dev.herokuapp.com/esporte',
      headers: { }
    };

    axios(config)
    .then(function (response) {
      for (var i = 0; i < response.data.length; i++) {
        let select = response.data[i].id === esporte ? "selected" : "";
        $("#esporte").append(`<option ${select} value="${response.data[i].id}">${response.data[i].nome}</option>`);
      }
    })
    .catch(function (error) {
      $("#errorPage").css('display','');
      $("#loadingPage").css('display','none');
      console.log(error);
    });
  }	

  async function loaderProfessor(){
    var config = {
      method: 'get',
      url: 'https://sportsfree-dev.herokuapp.com/professor',
      headers: { }
    };

    axios(config)
    .then(function (response) {
      for (var i = 0; i < response.data.length; i++) {
        let select = response.data[i].id === professor ? "selected" : "";
        $("#professor").append(`<option ${select} value="${response.data[i].id}">${response.data[i].nome}</option>`);
      }
    })
    .catch(function (error) {
      console.log(error);
      $("#errorPage").css('display','');
      $("#loadingPage").css('display','none');
    });	
  }

</script>

</body>
</html>
   