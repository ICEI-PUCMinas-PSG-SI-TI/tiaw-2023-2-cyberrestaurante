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
        html += "<tr>" + element.nome + "</td>";
        html += "<tr>" + element.legenda + "</td>";
        html += "<tr>" + element.foto + "</td>";
        html += "<tr>" + element.preco + "</td>";
        html += '<td><button onclick="deleteData(' +
            index +
            ')" class="btn btn-danger">Deletar</button><button onclick="updateData(' +
            index +
            ')"class="btn btn-warning m-2">Editar</button></td>';
        html += "</tr>";
    });

    document.querySelector("#crudTable tbody").innerHTML = html;
}

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