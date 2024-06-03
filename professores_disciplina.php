
         <!--  -->
<?php 
  include 'principal.php';
  $trim=@$_GET['trim'];
  $txt="";
  if (isset($_GET['trim'])) {
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
  <div id="msg"></div>
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lançamento de notas</h1>
  </div>
  <h4 class='m-0 font-weight-bold text-primary'><?= $txt; ?></h4>
  <div class="row"></div>
  <!-- Content Row -->
  <div class="row">
    <?= $administracao->listar_disciplinas_professor($_SESSION['f_key'], $trim);?>
  </div>
  <!-- Content Row -->

</div>
<!-- /.container-fluid -->

  <!-- Footer -->
<?php 
  include 'rodape.php';
?>