
         <!--  -->
<?php 
  include 'principal.php';
?>
        
<!-- Begin Page Content -->
<div class="container-fluid">
  <div id="msg"></div>
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lançamento de notas</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
      <div class="col-xl-3 col-md-4 mb-4">
        <a class="caf-btn" href="professores_disciplina.php?trim=1">
          <div class="shadow mb-4 h-100 d-flex align-items-center justify-content-center">
            <h2>1º - Trimestre</h2>
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-md-4 mb-4">
        <a class="caf-btn" href="professores_disciplina.php?trim=2">
          <div class="shadow mb-4 h-100 d-flex align-items-center justify-content-center">
            <h2>2º - Trimestre</h2>
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-md-4 mb-4">
        <a class="caf-btn" href="professores_disciplina.php?trim=3">
          <div class="shadow mb-4 h-100 d-flex align-items-center justify-content-center">
            <h2>3º - Trimestre</h2>
          </div>
        </a>
      </div>
  </div>
  <!-- Content Row -->

</div>
<!-- /.container-fluid -->

  <!-- Footer -->
<?php 
  include 'rodape.php';
?>