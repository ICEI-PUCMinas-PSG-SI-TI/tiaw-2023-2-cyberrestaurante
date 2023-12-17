/*document.addEventListener('DOMContentLoaded', function () {

    fetch('http://localhost:3000/pratos')
        .then(response => response.json())
        .then(res => {


            pegarInfoAlbum(res)
        })
        .catch(error => {
            console.error('Erro ao fazer o fetch dos dados: ', error);
        });


    const infoAlbum = document.querySelector('#pratos');

    const pegarInfoAlbum = (infosAlbum) => {

        infoAlbum.innerHTML = '';

        infosAlbum.forEach(infoA => {
            const newInfoAlbum = document.createElement('div');
            newInfoAlbum.classList.add('col-md-3');
            newInfoAlbum.classList.add('m-3');
            newInfoAlbum.innerHTML = `
                <div class="card" style="width: 18rem;">
                    <img src="${infoA.imagem}" class="card-img-top" alt="${infoA.nome}" width="300" height="170">
                    <div class="card-body">
                        <h5 class="card-title">${infoA.nome}</h5>
                        <p class="card-text">R$ ${infoA.preco}</p>
                        <a href="album${infoA.id}.html?id=${infoA.id}" class="btn btn-primary">Adicionar ao carrinho</a>
                    </div>
                </div>
            `;

            infoAlbum.appendChild(newInfoAlbum);
        })
    }
});*/

function validateForm(){
    var nome = document.getElementById("nome").value;
    var legenda = document.getElementById("legenda").value;
    var foto = document.getElementById("foto").value;
    var preco = document.getElementById("preco").value;

    if(nome == ""){
        alert("Precisa de um nome");
        return false;
    }

    if(legenda == ""){
        alert("Precisa de uma legenda");
        return false;
    }

    if(foto == ""){
        alert("Precisa de uma foto");
        return false;
    }

    if(preco == ""){
        alert("Precisa de um preço");
        return false;
    }

    return true;
}

function AddCarrinho(index)
{
    var carrinho = JSON.parse(localStorage.getItem("listaCarrinho"));
    var pratoSelecionado = JSON.parse(localStorage.getItem("listaPratos"))[index];
    var valorCarrinho = parseFloat(localStorage.getItem("valorCarrinho"));

    if (carrinho === null) {
        carrinho = [];
    }

    if (valorCarrinho === null) {
        valorCarrinho = 0;
    }

    carrinho.push(pratoSelecionado);

    localStorage.setItem("listaCarrinho", JSON.stringify(carrinho));
    localStorage.setItem("qtdCarrinho", carrinho.length);

    // carrinho.forEach(item => {
    //     valorCarrinho += parseFloat(item.preco);
    // })


    // localStorage.setItem("valorCarrinho", JSON.stringify(valorCarrinho));

    // console.log(localStorage.getItem("valorCarrinho"));

    alert("Produto adicionado ao carrinho!");
}

function showData(){
    var listaPratos;
    if(localStorage.getItem("listaPratos") == null){
        listaPratos = [];
    }
    else{
        listaPratos = JSON.parse(localStorage.getItem("listaPratos"));
    }

    var html = "";

    listaPratos.forEach(function (element, index){
        html += "<tr>";
        html += "<td>" + element.nome + "</td>";
        html += "<td>" + element.legenda + "</td>";
        html += "<td>" + element.foto + "</td>";
        html += "<td>" + element.preco + "</td>";
        html += '<td><button onclick="deletar(' +
            index +
            ')" class="btn btn-danger">Deletar</button><button onclick="atualizar(' +
            index +
            ')"class="btn btn-warning m-2">Editar</button></td>';
        html += "</tr>";
    });

    document.querySelector("#crudTable tbody").innerHTML = html;

}

function mostrarData(){
    var listaPratos;
    if(localStorage.getItem("listaPratos") == null){
        listaPratos = [];
    }
    else{
        listaPratos = JSON.parse(localStorage.getItem("listaPratos"));
    }

    var cardapioHtml = "";

    listaPratos.forEach(function (pratos, index){
        cardapioHtml += '<div class="col-3 m-1">';
        cardapioHtml += '<div class="card" style="width: 18rem;">';
        cardapioHtml += "<img src=" + pratos.foto + " class=" + "card-img-top" + " alt=" + pratos.nome + " width=" + 300 + " height=" + 170 + ">";
        cardapioHtml += '<div class="card-body">';
        cardapioHtml += "<h5 class=" + "card-title" + ">" + pratos.nome + "</h5>";
        cardapioHtml += "<p class=" + "card-text" + ">R$ " + pratos.preco + "</p>";
        cardapioHtml += "<button class='btn btn-primary' type='button' id="+ index +" onclick={AddCarrinho("+ index +")}>Adicionar ao carrinho</button>";
        cardapioHtml += "</div>";
        cardapioHtml += "</div>";
        cardapioHtml += "</div>";
    });

    document.querySelector("#pratos").innerHTML = cardapioHtml;
}

document.onload = mostrarData();
document.onload = showData();



function adicionar(){
    if(validateForm() == true){
        var nome = document.getElementById("nome").value;
        var legenda = document.getElementById("legenda").value;
        var foto = document.getElementById("foto").value;
        var preco = document.getElementById("preco").value;

        var listaPratos;
        if(localStorage.getItem("listaPratos") == null){
            listaPratos = [];
        }
        else{
            listaPratos = JSON.parse(localStorage.getItem("listaPratos"));
        }

        listaPratos.push({
            nome : nome,
            legenda : legenda,
            foto : foto,
            preco : preco,
        });

        localStorage.setItem("listaPratos", JSON.stringify(listaPratos));
        showData();
        document.getElementById("nome").value = "";
        document.getElementById("legenda").value = "";
        document.getElementById("foto").value = "";
        document.getElementById("preco").value = "";
    }
}

function deletar(index){
    var listaPratos;
        if(localStorage.getItem("listaPratos") == null){
            listaPratos = [];
        }
        else{
            listaPratos = JSON.parse(localStorage.getItem("listaPratos"));
        }

        listaPratos.splice(index, 1);
        localStorage.setItem("listaPratos", JSON.stringify(listaPratos))
        showData();
}

function atualizar(index) {
    document.getElementById("add").style.display = "none";
    document.getElementById("update").style.display = "block";

    var listaPratos;
        if(localStorage.getItem("listaPratos") == null){
            listaPratos = [];
        }
        else{
            listaPratos = JSON.parse(localStorage.getItem("listaPratos"));
        }

    document.getElementById("nome").value = listaPratos[index].nome;
    document.getElementById("legenda").value = listaPratos[index].legenda;
    document.getElementById("foto").value = listaPratos[index].foto;
    document.getElementById("preco").value = listaPratos[index].preco;

    document.querySelector("#update").onclick = function(){
        if(validateForm() == true){
           listaPratos[index].nome = document.getElementById("nome").value;
           listaPratos[index].legenda = document.getElementById("legenda").value;
           listaPratos[index].foto = document.getElementById("foto").value;
           listaPratos[index].preco = document.getElementById("preco").value;

           localStorage.setItem("listaPratos", JSON.stringify(listaPratos));

            showData();

            document.getElementById("nome").value = "";
            document.getElementById("legenda").value = "";
            document.getElementById("foto").value = "";
            document.getElementById("preco").value = "";

            document.getElementById("add").style.display = "block";
            document.getElementById("update").style.display = "none";
        }
    }
}