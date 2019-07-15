//Imprimir currículo
function imprimir() {
    //Captura o botão a armazena em uma variável
    var btn_imprimir = document.getElementById("btn-imprimir");
    //Esconde o botão
    btn_imprimir.style.visibility = 'hidden';
    //imprime o conteúdo da página.
    window.print()
    btn_imprimir.style.visibility = 'visible';
}