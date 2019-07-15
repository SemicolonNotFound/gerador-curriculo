// //Incrementa
// var btnIncrementa = document.querySelectorAll(".btn-incrementa")
// console.log(btnIncrementa)

// //let são para não conflitar os nomes
// for (let botao of btnIncrementa) {

//     botao.addEventListener('click', incrementa)

//     function incrementa() {
//         //Elemento mais próximo
//         var item = botao.closest('.item')
//         var input = item.querySelector('.quantidade')
//         input.value++
//         var preco = pegaPrecoItem(item)
//         adicionaAoTotal(preco)

//     }
// }

// //Decrementa
// var btnDecrementa = document.querySelectorAll(".btn-decrementa")
// console.log(btnDecrementa)

// for (let botao of btnDecrementa) {

//     botao.addEventListener('click', decrementa)


//     function decrementa() {
//         //Elemento mais próximo
//         var item = botao.closest('.item')
//         var input = item.querySelector('.quantidade')

//         if (input.value > 0) {
//             input.value--
//             var preco = pegaPrecoItem(item)
//             adicionaAoTotal(-preco)
//         } else {
//             console.log(input.value)
//         }
//     }
// }

// var formPedido = document.forms.pedido

// formPedido.addEventListener('submit', function (event) {
//     var contador = 0;

//     var inputs = formPedido.querySelectorAll("input.quantidade")
//     for (let input of inputs) {
//         if (input.value > 0) {
//             contador++
//         }

//     }
//     if (contador == 0) {
//         alert("Deve ter pelo menos uma pizza no pedido")
//         event.preventDefault()
//     }
// })

// //Funções
// function pegaPrecoItem(item) {
//     var precoItem = item.querySelector('.preco-item')
//     return Number(precoItem.textContent)
// }

// function adicionaAoTotal(valor) {
//     var elementoTotal = document.querySelector("#total")
//     elementoTotal.textContent = valor + Number(elementoTotal.textContent)
// }

function adicionarExperiencia() {
    const formulario = document.querySelector('.formulario-experiencia');
    if (!formulario) return;
    const novoFormulario = formulario.cloneNode(true);
    const campos = novoFormulario.querySelectorAll('input, textarea');
    for (let campo of campos) {
        campo.value = '';
    }
    formulario.parentElement.appendChild(novoFormulario);
}