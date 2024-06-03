 <!--  -->
<?php 
  include 'principal.php';
  $trim=@$_GET['trim'];
  $dis=@$_GET['dis'];
  $txt="";
  if (isset($_GET['trim']) && isset($_GET['dis'])) {
    if ($trim == 1) {
      $txt = "1º - Trimestre";
    }
    if ($trim == 2) {
      $txt = "2º - Trimestre";
    }
    if ($trim == 3) {
      $txt = "3º - Trimestre";
    }
  }
  else {
    header("Location: professores_pauta.php");
  }
?>
  
        <!-- Begin Page Content -->
        <div class="container-fluid">
           <div id='mensagem'></div>

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lançamento de notas : <?= $txt; ?></h1>
        </div>
        <h4 class='m-0 font-weight-bold text-primary'>Disciplina: <?= $administracao->pega_tudo('nome_disciplina','caf_disciplina', 'iddisciplina ', $dis); ?></h4>
        <div class="row"></div>

        <div class="">
          <input type="text" name="" id="idTrimestre" value="<?=$trim;?>" hidden>
          <input type="text" name="" id="idDisc" value="<?=$dis;?>" hidden>
          <input type="text" name="" id="idProf" value="<?=$_SESSION['f_key'];?>" hidden>
            <label for="">Selecione uma classe para ver os alunos</label>
            <select class="custom-select custom-select-lg mb-3" id="idTurma">
                <option selected>Selecione</option>
                <?= $administracao->listar_turmas_professor($_SESSION['f_key'], $dis);?>
            </select>
        </div>
        <!-- Content Row -->
          <!-- Page Heading -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-sm" id="dataTable" cellspacing="0">
                  <thead >
                    <tr class="filters">
                      <th>Nome aluno</th>
                      <th>Avaliação Continua</th>
                      <th>Prova dos Professores</th>
                      <th>Prova Parcelar</th>
                      <th>Média</th>
                      <th>Estado</th>
                      <th>Acções</th>
                    </tr>
                  </thead>
                  <tbody id="searchable" class="searchable viewAluno">

                  </tbody>
                </table>
                <div class="viewAlunoDIV">
                  
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

  <!-- Footer -->
<?php 
  include 'rodape.php';
?>
  
<!-- Logout Modal-->
<div class="modal fade" id="cad_usuario" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header " style="background-color: #880f0f;">
                <h5 class="modal-title" style="color: #fff;" id="exampleModalLabel">Cadastrar Usuários</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#fff;">×</span>
                </button>
            </div>
            <form id="regForm" name="regForm"  method="POST" accept-charset="utf-8">
                <input type="hidden" id="controlador" name="Usuario_insercao">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" autofocus="" class="input-xs form-control in" id="nome" name="nome" maxlength="70" value="" placeholder="Nome" required="" >
                        </div> 

                    </div> 
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="input-xs form-control in" id="usuario" name="usuario" maxlength="70" value="" placeholder="Usuário" required="" >
                        </div>  
                        <div class="col-md-6">
                            <select class="input-xs form-control in" id="id_nivel_acesso" name="id_nivel_acesso" required="">
                                <option value="">Selecione</option>
                                <?=$usuario->select_nivel_acesso();  ?>
                            </select>
                        </div> 

                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <input type="password" class="input-xs form-control in" id="senha" name="senha" maxlength=""  value="" placeholder="Senha" required="" >
                        </div> 

                        <div class="col-md-6">
                            <input type="password" oninput="if ($('#senha').val()===$(this).val()) {$('#ok').attr('type', 'submit'); }else{$('#ok').attr('type', 'button'); }" class="input-xs form-control in" name="senha_confirmacao"  value="" placeholder="Confirmar a senha" required="" >
                        </div>  
                    </div>  

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" id="ok" name="ok" type="button" data-dismiss=""><i class="fas fa-save"></i> Cadastrar</button>
                </div>
            </form> 
        </div>
    </div>
</div>


<script type="text/javascript">
   
</script>