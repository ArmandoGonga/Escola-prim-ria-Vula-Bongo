<!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #06003a;"  id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="painel_inicial.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <i style="font-size:36pt">D</i>
        </div>
        <div class="sidebar-brand-text mx-3">VULA BONGO<sup ><i class="rotate-n-15"></i></sup></div>
      </a>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
<?php 
// Niveis de acesso para funcionários

  if($_SESSION['usuarioNivelAcesso']  == 1 || $_SESSION['usuarioNivelAcesso']  == 2){ 
  
?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="painel_inicial.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Painel principal</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Dashboard -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="mensalidades.php">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Mensalidades</span></a>
      </li> -->
      <!-- Divider -->
      <!-- Nav Item - usuarios -->
      <li class="nav-item">
        <a class="nav-link" href="usuarios.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Usuários</span></a>
      </li>
      <!-- Divider -->
      <!-- Nav Item - Turmas -->
      <li class="nav-item">
        <a class="nav-link" href="classes.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Classes</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="disciplinas.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Disciplinas</span></a>
      </li>
      <!-- Nav Item - Turmas -->
      <li class="nav-item" hidden>
        <a class="nav-link" href="administracao.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Administração</span></a>
      </li>
      <!-- Nav Item - Alunos -->
      <li class="nav-item">
        <a class="nav-link" href="alunos.php">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Alunos</span></a>
      </li>
      <!-- Nav Item - Professores -->
      <li class="nav-item">
        <a class="nav-link" href="professores.php">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Professores</span></a>
      </li>
      <!-- Nav Item - Exportar Arquivos -->
      <li class="nav-item">
        <a class="nav-link" href="exportar.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Exportar Arquivo</span></a>
      </li>
      <!-- Nav Item - Funcionários -->
      <li class="nav-item" hidden>
        <a class="nav-link" href="funcionarios.php">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Funcionários</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
  <?php 
    }
    else if ($_SESSION['usuarioNivelAcesso']  == 3) {
?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="painel_inicial.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Painel principal</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="mensalidades.php">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Mensalidades</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="classes.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Classes</span></a>
      </li>
      <!-- Nav Item - Alunos -->
      <li class="nav-item">
        <a class="nav-link" href="alunos.php">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Alunos</span></a>
      </li>
      <!-- Nav Item - Professores -->
      <li class="nav-item">
        <a class="nav-link" href="professores.php">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Professores</span></a>
      </li>
      <!-- Nav Item - Exportar Arquivos -->
      <li class="nav-item">
        <a class="nav-link" href="exportar.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Exportar Arquivo</span></a>
      </li>

<?php
    }
    else if ($_SESSION['usuarioNivelAcesso']  == 4) {
?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="painel_inicial.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Painel principal</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="mensalidades.php">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Mensalidades</span></a>
      </li>
      <!-- Nav Item - Alunos -->
      <li class="nav-item">
        <a class="nav-link" href="alunos.php">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Alunos</span></a>
      </li>

<?php
    }
    else if ($_SESSION['usuarioNivelAcesso']  == 5) {
?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="painel_inicial.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Painel principal</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="classes_professor.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Classes</span></a>
      </li>
      <!-- Nav Item - Alunos -->
      <li class="nav-item">
        <a class="nav-link" href="alunos_classes_professor.php">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Alunos</span></a>
      </li>
      <!-- Nav Item - Alunos -->
      <li class="nav-item">
        <a class="nav-link" href="professores_pauta.php">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Pauta</span>
        </a>
      </li>
<?php
    }
  ?>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
     <!-- End of Sidebar -->