<!--  -->
<?php
include 'principal.php';
$q=@$_GET['q'];

?>

<!-- Begin Page Content -->
<div class="container-fluid" style="">

    <div id='mensagem'></div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Disciplinas</h1>
            <a href="#" data-toggle="modal" data-target="#cad_disciplina" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-100"></i></a>
        </div>
        <?php if(!empty($q)){ echo "<h5>". $administracao->pesquisa_classes($q) . "</h5>";} ?>

        <!-- Content Row -->
        <div id="dados" class="row">

            <?= $administracao->listar_disciplinas($q); ?>

        </div>


        <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<!-- Logout Modal-->
<?php
if(empty($q)){
    ?>
}
<div class="modal fade" id="cad_disciplina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header " style="background-color: #880f0f;">
                <h5 class="modal-title" style="color: #fff;" id="exampleModalLabel">Cadastrar Disciplina</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#fff;">×</span>
                </button>
            </div>
            <form id="disciplina_submit" method="POST" accept-charset="utf-8">
                <div class="modal-body">

                    <input type="hidden" id="controlador" name="disciplina_insercao">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="number" readonly="" class="input-xs form-control in" name="codigo" maxlength="70" value="<?=$administracao->ultimo_id_disciplina(); ?>" placeholder="Codigo" required="" >
                        </div>  
                        <div class="col-md-9">
                            <input type="text" class="input-xs form-control in" name="nome_disciplina" maxlength="70" value="" placeholder="Nome do Disciplina" required="" >
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

<?php
}
else {
    ?>
    <!--Adicionando disciplina em cada curso-->
    <div class="modal fade" id="cad_disciplina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header " style="background-color: #880f0f;">
                    <h5 class="modal-title" style="color: #fff;" id="exampleModalLabel">Adicinar disciplina na classe</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:#fff;">×</span>
                    </button>
                </div>
                <form id="disciplina_classe" method="POST" accept-charset="utf-8">
                    <div class="modal-body">
    
                        <input type="hidden" id="controlador" name="iddisciplina_classe" value="<?php echo $q;?>">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Disciplina</label>
                                <select class="input-xs form-control in" id="disciplina" name="disciplina" required>
                                    <option value="">Selecione</option>
                                    <?=$administracao->select_disciplina();  ?>
                                </select>
                            </div> 
    
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm" id="ok" name="ok" type="submit" data-dismiss=""><i class="fas fa-add"></i> Adicionar</button>
                    </div> 
                </form> 
            </div>
        </div>
    </div>
<?php
}

include 'rodape.php';
?>