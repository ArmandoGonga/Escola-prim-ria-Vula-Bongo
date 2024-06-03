
         <!--  -->
<?php 
  include 'principal.php';
?>
        
<!-- Begin Page Content -->
<div class="container-fluid">
  <div id="msg"></div>
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Exportar Arquivo</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-12 d-sm-flex align-items-center">
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-2 d-flex">
          <input type="radio" class="input-xs in mr-2" id="bolectim" name="item" value="1">
          <h5><label for="bolectim">Bolectim de Notas</label></h5>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-2 d-flex">
          <input type="radio" class="input-xs in mr-2" id="mini" name="item" value="2">
          <h5><label for="mini">Mini Pauta</label></h5>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-2 d-flex">
          <input type="radio" class="input-xs in mr-2" id="pauta" name="item" value="3">
          <h5><label for="pauta">Pauta Final</label></h5>
      </div>
    </div>
  </div>
  <!-- Content Row -->
  <div id="exporBolectim" class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
      <div class=" m-0 font-weight-bold text-primary">
        <label>Exportação de Bolectim de Notas</label>
      </div>
      <hr>
      <form action="imprimir.php" method="get">
        <div class="row">
          <input type="text" name="opcao" value="1" hidden>
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-12">
              <label for="idTurmaExpor">Selecione uma classe para ver os alunos</label>
              <select class="custom-select custom-select-lg mb-3" id="idTurmaExpor" name="idTurmaExpor">
                  <option value="" selected>Selecione</option>
                  <?= $administracao->listar_turmas_expor();?>
              </select>
          </div>
          <hr>
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
              <label for="idAlunoExpor">Aluno</label>
              <select class="custom-select custom-select-lg mb-3" id="idAlunoExpor" name="idAlunoExpor">
                  <option value="" selected>Selecione</option>
              </select>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
              <label for="idTrimestre">Trimestre</label>
              <select class="custom-select custom-select-lg mb-3" id="idTrimestre" name="idTrimestre">
                  <option value="" selected>Selecione</option>
                  <option value="1">1º Trimestre</option>
                  <option value="2">2º Trimestre</option>
                  <option value="3">3º Trimestre</option>
              </select>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
              <button  class="btn btn-success btn-icon-split" type="submit" name="exportar">
                  <span class="icon text-white-50">
                      <i class="fas fa-print"></i>
                  </span>
                  <span class="text">Exportar</span>
              </button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <!-- Content Row -->
  <div id="exporMini" class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
      <div class=" m-0 font-weight-bold text-primary">
        <label>Exportação de Mini Pauta</label>
      </div>
      <hr>
      <form action="imprimir.php" method="get">
        <div class="row">
          <input type="text" name="opcao" value="2" hidden>
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
              <label for="idTurmaExpor">Selecione uma classe para ver os alunos</label>
              <select class="custom-select custom-select-lg mb-3" id="idTurmaExpor" name="idTurmaExpor">
                  <option value="" selected>Selecione</option>
                  <?= $administracao->listar_turmas_expor();?>
              </select>
          </div>
          <hr>
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
              <label for="idTrimestre">Trimestre</label>
              <select class="custom-select custom-select-lg mb-3" id="idTrimestre" name="idTrimestre">
                  <option value="" selected>Selecione</option>
                  <option value="1">1º Trimestre</option>
                  <option value="2">2º Trimestre</option>
                  <option value="3">3º Trimestre</option>
              </select>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
              <button  class="btn btn-success btn-icon-split" type="submit" name="exportar">
                  <span class="icon text-white-50">
                      <i class="fas fa-print"></i>
                  </span>
                  <span class="text">Exportar</span>
              </button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <!-- Content Row -->
  <div id="exporPauta" class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
      <div class=" m-0 font-weight-bold text-primary">
        <label>Exportação de Pauta Final</label>
      </div>
      <hr>
      <form action="imprimir.php" method="get">
        <div class="row">
          <input type="text" name="opcao" value="3" hidden>
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-12">
              <label for="idTurmaExpor">Selecione uma classe</label>
              <select class="custom-select custom-select-lg mb-3" id="idTurmaExpor" name="idTurmaExpor">
                  <option value="" selected>Selecione</option>
                  <?= $administracao->listar_turmas_expor();?>
              </select>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
              <button  class="btn btn-success btn-icon-split" type="submit" name="exportar">
                  <span class="icon text-white-50">
                      <i class="fas fa-print"></i>
                  </span>
                  <span class="text">Exportar</span>
              </button>
          </div>
        </div>
      </form>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

  <!-- Footer -->
<?php 
  include 'rodape.php';
?>