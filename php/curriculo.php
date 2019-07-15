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

    // $curriculoPronto .= $nomeCompleto;
    // $curriculoPronto .= $idade;
    // $curriculoPronto .= $estadoCivil;
    // $curriculoPronto .= $nacionalidade;
    // $curriculoPronto .= $endereco;
    // $curriculoPronto .= $telefone;
    // $curriculoPronto .= $cidade;
    // $curriculoPronto .= $estado;
    // $curriculoPronto .= $email;
    // $curriculoPronto .= $linkedin;
    // $curriculoPronto .= $objetivo;
    // $curriculoPronto .= $instituicaoEnsino;
    // $curriculoPronto .= $curso;
    // $curriculoPronto .= $inicioCurso;
    // $curriculoPronto .= $conclusaoCurso;
    // $curriculoPronto .= $empresa;
    // $curriculoPronto .= $cargo;
    // $curriculoPronto .= $empresaEntrada;
    // $curriculoPronto .= $empresaSaida;
    // $curriculoPronto .= $principaisAtividades;
    // $curriculoPronto .= $infoAdicional;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Currículo Pronto</title>
    <link rel="stylesheet" href="../css/curriculo.css">
</head>

<body>
    <main>
        <div>
            <h1><?php echo $nomeCompleto ?></h1>
        </div>
        <p>
            <p><?php echo $nacionalidade . ', ' . $estadoCivil . ', ' . $idade . ' anos.' ?></p>
        </p>
        <div>
            <p><?php echo $endereco . '. ' . $cidade . ' - ' . $estado ?></p>
        </div>
        <div>
            <p><?php echo 'Telefone: ' .  $telefone . ' - Linkedin: ' .  $linkedin ?></p>
        </div>
        <div>
            <p><?php echo 'E-mail: ' .  $email ?></p>
        </div>
        <br />
        <div>
            <h2>Objetivo Profissional</h2>
            <hr />
            <br />
            <p><?php echo $objetivo ?></p>
            <br />
        </div>
        <div>
            <h2>Formação Acadêmica</h2>
            <hr />
            <br />
            <p><?php echo 'Graduação em ' . $curso . ' - ' . $instituicaoEnsino . $inicioCurso . ' - ' . $conclusaoCurso ?></p>
            <br />
        </div>
        <div>
            <h2>Experiência Profissional</h2>
            <hr />
            <br />
            <p><?php echo $empresa . ' - ' . $cargo . ' (' . $empresaEntrada . '/' . $empresaSaida . ')' ?></p>
            <p><?php echo $principaisAtividades ?></p>
            <br />
        </div>
        <div>
            <h2>Informações Adicionais</h2>
            <hr />
            <br />
            <p><?php echo $infoAdicional ?></p>
        </div>
    </main>
</body>

</html>