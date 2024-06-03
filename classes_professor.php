<!--  -->
<?php
include 'principal.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid" style="">

    <div id='mensagem'></div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Classes</h1>
        </div>

        <!-- Content Row -->
        <div id="dados" class="row">

            <?= $administracao->listar_classes_professor($_SESSION['f_key']);?>

        </div>


        <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->


<script type='text/javascript'>
    /*$(document).ready(function () {

        $('#nome_classe_e').prop('readonly', true);
        
    })*/
</script>
                   

<?php
include 'rodape.php';
?>