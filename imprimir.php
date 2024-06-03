<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exportando Arquivo</title>
    <link rel="stylesheet" href="css/folhas.css">
</head>
<body>
<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
    require_once "includes/Class.class.php";

    //$professor = new professor;
    $administracao = new administracao;
    $professor = new professor;
    $aluno = new aluno;
    $usuario = new usuario;
    $funcionario = new funcionario;
    $teste = new teste;
    $trabalho = new trabalho;
    
    $trim="";
    if(isset($_GET['idTrimestre'])){
        if ($_GET['idTrimestre'] == 1) {
            $trim = "Iº TRIMESTRE";
        }
        if ($_GET['idTrimestre'] == 2) {
            $trim = "IIº TRIMESTRE";
        }
        if ($_GET['idTrimestre'] == 3) {
            $trim = "IIIº TRIMESTRE";
        }
    }
    
    if (isset($_GET['exportar'])) {
        if ($_GET['opcao'] == 1) {
            ?>
            <div class="A4-H">
                <div class="A4-CAB">
                    <img src="img/angola.svg" alt="REPÚBLICA DE ANGOLA" title="REPÚBLICA DE ANGOLA" width="70">
                    <p>REPÚBLICA DE ANGOLA</p>
                    <p>MINISTERIO DA EDUCAÇÃO</p>
                    <p>DIRECÇÃO MUNICIPAL DA EDUCAÇÃO DE CALANDULA</p>
                </div>
                <h2>ESCOLA PRIMARIA Nº 10 VULA BONGO <br> BOLECTIM DE NOTAS <?=$trim?></h2>
                <hr>
                <div class="A4-CORPO">
                    <p class="p"><b>Nome aluno:</b> <?= $administracao->pega_tudo('nome_aluno','aluno', 'nr_aluno ', $_GET['idAlunoExpor']); ?> <?= $administracao->pega_tudo('apelido_aluno','aluno', 'nr_aluno ', $_GET['idAlunoExpor']); ?></p>
                    <p class="p-flex">
                        <span><b>Nº Processo:</b> <?=$_GET['idAlunoExpor'];?></span>
                        <span><b>Classe:</b> <?= $administracao->pega_class($_GET['idTurmaExpor']); ?></span>
                        <span><b>Turma:</b> <?= $administracao->pega_tudo('nome_turma','turma', 'nr_turma ', $_GET['idTurmaExpor']); ?></span>
                    </p>
                    <table class="A4-table">
                        <thead>
                            <tr>
                                <th>DISCIPLINA</th>
                                <th>P1</th>
                                <th>P2</th>
                                <th>AC</th>
                                <th>MÉDIA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $administracao->listar_bolectim($_GET['idTurmaExpor'], $_GET['idAlunoExpor'], $_GET['idTrimestre']); ?>
                        </tbody>
                    </table>
                </div>
                <div class="A4-FOT">
                    <div>
                        <h4>Director de Turma</h4>
                        <p>________________________________</p>
                    </div>
                    <div>
                        <h4>Director da Escola</h4>
                        <p>________________________________</p>
                    </div>
                </div>
            </div>
            <script>
                window.print();
                //window.history.back();
            </script>
            <?php
        }
        else if ($_GET['opcao'] == 2) {
            ?>
            <div class="A4-H">
                <div class="A4-CAB">
                    <img src="img/angola.svg" alt="REPÚBLICA DE ANGOLA" title="REPÚBLICA DE ANGOLA" width="70">
                    <p>REPÚBLICA DE ANGOLA</p>
                    <p>MINISTERIO DA EDUCAÇÃO</p>
                    <p>DIRECÇÃO MUNICIPAL DA EDUCAÇÃO DE CALANDULA</p>
                </div>
                <h2>ESCOLA PRIMARIA Nº 10 VULA BONGO <br> MINI-PAUTA <?=$trim?></h2>
                <hr>
                <div class="A4-CORPO">
                    <p class="p"> </p>
                    <p class="p-flex">
                        <span><b>Classe:</b> <?= $administracao->pega_class($_GET['idTurmaExpor']); ?></span>
                        <span><b>Turma:</b> <?= $administracao->pega_tudo('nome_turma','turma', 'nr_turma ', $_GET['idTurmaExpor']); ?></span>
                    </p>
                    <?= $administracao->listar_mini_pauta($_GET['idTurmaExpor'], $_GET['idTrimestre']); ?>
                </div>
                <div class="A4-FOT-CENTRO">
                    <div>
                        <h4>Director da Escola</h4>
                        <p>________________________________</p>
                    </div>
                </div>
            </div>
            <script>
                window.print();
            </script>
            <?php
        }
        else if ($_GET['opcao'] == 3) {
            ?>
            <div class="A4-H">
                <div class="A4-CAB">
                    <img src="img/angola.svg" alt="REPÚBLICA DE ANGOLA" title="REPÚBLICA DE ANGOLA" width="70">
                    <p>REPÚBLICA DE ANGOLA</p>
                    <p>MINISTERIO DA EDUCAÇÃO</p>
                    <p>DIRECÇÃO MUNICIPAL DA EDUCAÇÃO DE CALANDULA</p>
                </div>
                <h2>ESCOLA PRIMARIA Nº 10 VULA BONGO <br> PAUTA FINAL <?=$trim?></h2>
                <hr>
                <div class="A4-CORPO">
                    <p class="p"> </p>
                    <p class="p-flex">
                        <span><b>Classe:</b> <?= $administracao->pega_class($_GET['idTurmaExpor']); ?></span>
                        <span><b>Turma:</b> <?= $administracao->pega_tudo('nome_turma','turma', 'nr_turma ', $_GET['idTurmaExpor']); ?></span>
                    </p>
                    <?= $administracao->listar_pauta($_GET['idTurmaExpor']); ?>
                </div>
                <div class="A4-FOT-CENTRO">
                    <div class="col-md-12">
                        <h4>Director da Escola</h4>
                        <p>________________________________</p>
                    </div>
                </div>
                <div class="A4-FOT-CENTRO">
                    <div class="col-md-6">
                        <h4>Sub. Director da Escola</h4>
                        <p>________________________________</p>
                    </div>
                </div>
                <div class="A4-FOT-CENTRO">
                    <div class="col-md-6">
                        <h4>Coordenador do Curso</h4>
                        <p>________________________________</p>
                    </div>
                </div>
            </div>
            <script>
                window.print();
                //window.history.back();
            </script>
            <?php
        }
        else{
            header("Location: index.php");
        }
    }
?>.
</body>
</html>
