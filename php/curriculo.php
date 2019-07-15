<?php

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

    $objetivoFormatado = wordwrap($objetivo, 75, "<br />\n");
    $principaisAtividadesFormatado = wordwrap($objetivo, 75, "<br />\n");
    $infoAdicionalFormatado = wordwrap($objetivo, 75, "<br />\n");
} else {
    echo "Preencha o formulário corretamente";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Currículo Pronto</title>
    <link rel="stylesheet" href="../css/curriculo.css">
    <script src="../js/app.js"></script>
</head>

<body>
    <main>
        <div>
            <h1><?php echo $nomeCompleto ?></h1>
        </div>
        <div>
            <p><?php echo $nacionalidade . ', ' . $estadoCivil . ', ' . $idade . ' anos.' ?></p>
        </div>
        <div>
            <p><?php echo $endereco . '. ' . $cidade . ' - ' . $estado ?></p>
        </div>
        <div>
            <p><?php echo 'Telefone: ' .  $telefone . ' - Linkedin: ' .  $linkedin ?></p>
        </div>
        <div>
            <p><?php echo 'E-mail: ' .  $email ?></p>
        </div>
        <br>
        <div>
            <h2>Objetivo Profissional</h2>
            <p><?php echo $objetivoFormatado ?></p>
            <br />
        </div>
        <div>
            <h2>Formação Acadêmica</h2>
            <p><?php echo $instituicaoEnsino . ' - (' . $inicioCurso . ' - ' . $conclusaoCurso . ')' ?></p>
            <p><?php echo 'Graduação em ' . $curso ?></p>
            <br />
        </div>
        <div>
            <h2>Experiência Profissional</h2>
            <p><?php echo $empresa . ' - ' . $cargo . ' (' . $empresaEntrada . '-' . $empresaSaida . ')' ?></p>
            <p><?php echo $principaisAtividadesFormatado ?></p>
            <br />
        </div>
        <div>
            <h2>Informações Adicionais</h2>
            <p><?php echo $infoAdicionalFormatado ?></p>
        </div>
        <br>
        <?php echo  "<script src='../js/app.js'></script>\n"; ?>
        <button id="btn-imprimir" class="button" onclick="imprimir()">Imprimir Currículo</button>
    </main>
</body>

</html>