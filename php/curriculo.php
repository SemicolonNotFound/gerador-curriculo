<?php

$curriculoPronto = '';

if ($_POST) {
    $nomeCompleto = $_POST['nome_completo'];
    $idade = $_POST['idade'];
    $estadoCivil = $_POST['estado_civil'];
    $nacionalidade = $_POST['nacionalidade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $linkedin = $_POST['linkedin'];
    $objetivo = $_POST['objetivo'];
    $instituicaoEnsino = $_POST['instituicao_ensino'];
    $curso = $_POST['curso'];
    $inicioCurso = $_POST['inicio_curso'];
    $conclusaoCurso = $_POST['conclusao_curso'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $empresaEntrada = $_POST['empresa_entrada'];
    $empresaSaida = $_POST['empresa_saida'];
    $principaisAtividades = $_POST['principais_atividades'];
    $infoAdicional = $_POST['info_adicional'];

    $curriculoPronto .= $nomeCompleto;
    $curriculoPronto .= $idade;
    $curriculoPronto .= $estadoCivil;
    $curriculoPronto .= $nacionalidade;
    $curriculoPronto .= $endereco;
    $curriculoPronto .= $telefone;
    $curriculoPronto .= $cidade;
    $curriculoPronto .= $estado;
    $curriculoPronto .= $email;
    $curriculoPronto .= $linkedin;
    $curriculoPronto .= $objetivo;
    $curriculoPronto .= $instituicaoEnsino;
    $curriculoPronto .= $curso;
    $curriculoPronto .= $inicioCurso;
    $curriculoPronto .= $conclusaoCurso;
    $curriculoPronto .= $empresa;
    $curriculoPronto .= $cargo;
    $curriculoPronto .= $empresaEntrada;
    $curriculoPronto .= $empresaSaida;
    $curriculoPronto .= $principaisAtividades;
    $curriculoPronto .= $infoAdicional;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Currículo Pronto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <main>
        <div>
            <?php echo $nomeCompleto ?>
            <?php echo $idade ?>
            <?php echo $estadoCivil ?>
            <?php echo $nacionalidade ?>
            <?php echo $endereco ?>
            <?php echo $telefone ?>
            <?php echo $cidade ?>
            <?php echo $estado ?>
            <?php echo $email ?>
            <?php echo $linkedin ?>
            <?php echo $objetivo ?>
            <?php echo $instituicaoEnsino ?>
            <?php echo $curso ?>
            <?php echo $inicioCurso ?>
            <?php echo $conclusaoCurso ?>
            <?php echo $empresa ?>
            <?php echo $empresaEntrada ?>
            <?php echo $empresaSaida ?>
            <?php echo $principaisAtividades ?>
            <?php echo $infoAdicional ?>
        </div>
    </main>
</body>

</html>