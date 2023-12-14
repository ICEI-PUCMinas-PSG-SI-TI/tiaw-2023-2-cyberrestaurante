function getCarrinho() {
    var listaCarrinho;

    if (localStorage.getItem("listaCarrinho") == null) {
        listaCarrinho = [];
    }
    else {
        listaCarrinho = JSON.parse(localStorage.getItem("listaCarrinho"));
    }

    return listaCarrinho;
}

function removerItem(index) {
    var listaCarrinho = getCarrinho();

    var itemParaRemover = listaCarrinho[index];
    listaCarrinho.splice = [index];
    //itemParaRemover.remove();

    console.log(index)
}

function mostrarData() {
    var listaCarrinho = getCarrinho();
    var valorCarrinho = 0;

    var carrinhoHtml = "";

    listaCarrinho.forEach(function (pratos, index) {
        carrinhoHtml += '<div class="col-3 m-3">';
        carrinhoHtml += '<div class="card" style="width: 18rem;">';
        carrinhoHtml += "<img src=" + pratos.foto + " class=" + "card-img-top" + " alt=" + pratos.nome + " width=" + 300 + " height=" + 170 + ">";
        carrinhoHtml += '<div class="card-body">';
        carrinhoHtml += "<h5 class=" + "card-title" + ">" + pratos.nome + "</h5>";
        carrinhoHtml += "<p class=" + "card-text" + ">R$ " + pratos.preco + "</p>";
        carrinhoHtml += "</div>";
        carrinhoHtml += "</div>";
        carrinhoHtml += "</div>";

        valorCarrinho += parseFloat(pratos.preco);
    });

    document.querySelector("#total").innerHTML = valorCarrinho;
    document.querySelector("#carrinho").innerHTML = carrinhoHtml;
}

document.onload = mostrarData();