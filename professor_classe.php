<!--  -->
<?php
include 'principal.php';

$q=@$_GET['q'];
$disc=@$_GET['disc'];
?>

<!-- Begin Page Content -->
<div class="container-fluid" style="">

    <div id='mensagem'></div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">#PROFESSOR: <?= $administracao->pega_tudo('nome_professor','caf_professor', 'idprofessor' , $q); ?> <?= $administracao->pega_tudo('apelido_professor','caf_professor', 'idprofessor', $q); ?></h1>
            <a href="#" data-toggle="modal" data-target="#cad_classes_turmas" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-100"></i> </a>
        </div>
        <h4 class='m-0 font-weight-bold text-primary'>Disciplina: <?= $administracao->pega_tudo('nome_disciplina','caf_disciplina', 'iddisciplina ', $disc); ?></h4>
        <h5>Classes e turmas inseridas</h5>
        <div class="row"></div>
        <!-- Content Row -->
        <div id="dados" class="row">

            <?= $administracao->listar_classes_turmas($q, $disc); ?>

        </div>


        <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<!-- Logout Modal-->
<div class="modal fade" id="cad_classes_turmas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header " style="background-color: #880f0f;">
                <h5 class="modal-title" style="color: #fff;" id="exampleModalLabel">Adicionando classe e turmas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#fff;">×</span>
                </button>
            </div>
            <form id="classes_trumas" method="POST" accept-charset="utf-8">
                <div class="modal-body">
                    <input type="hidden" name="idprofessor" value="<?php echo $q; ?>">
                    <input type="hidden" name="iddisciplina" value="<?php echo $disc; ?>">
                    <div class="row">
                        <!--<div class="col-md-3">
                            <input type="number" readonly="" class="input-xs form-control in" name="codigo" maxlength="70" value="<?=$administracao->ultimo_id_classe(); ?>" placeholder="Codigo" required="" >
                        </div>  -->
                        <div class="col-md-12">
                            <label>Classes</label>
                            <select class="input-xs form-control in" id="classe" name="classe" required>
                                <option value="">Selecione</option>
                                <?=$administracao->pesquisa_classes_disciplina($disc);  ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Turmas</label>
                            <select class="input-xs form-control in" id="turmas" name="turmas" required>
                                <option value="">Selecione</option>
                            </select>
                        </div>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" id="ok" name="ok" type="submit" data-dismiss=""><i class="fas fa-save"></i> Cadastrar</button>
                </div> 
            </form> 
        </div>
    </div>
</div>


<script type='text/javascript'>
    /*$(document).ready(function () {

        $('#nome_classe_e').prop('readonly', true);
        
    })*/
</script>
                   

<?php
include 'rodape.php';
?>