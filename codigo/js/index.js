
  
  const userLogado = JSON.parse(localStorage.getItem("userLogado"));
  
  const logado = document.querySelector("#logado");
  logado.innerHTML = `Olá ${userLogado.nome}`;

  function redirecionarParaOutraPagina() {
    window.location.href = './assets/html/reserva.html';
}

function redirecionarParaCardapio() {
  window.location.href = './assets/html/cardapio.html';
}
$(document).ready(function() {
  $('#menuCarousel').carousel();
});
$(document).ready(function() {
  // Inicializa o carrossel
  $('#menuCarousel').carousel();

  // Adiciona a funcionalidade de trocar as imagens ao pressionar os botões next e prev
  $('#btnNext').click(function() {
    $('#menuCarousel').carousel('next');
  });

  $('#btnPrev').click(function() {
    $('#menuCarousel').carousel('prev');
  });

  // Adiciona a funcionalidade para mudar as imagens do carrossel dinamicamente
  $('#changeImagesBtn').click(function() {
    // Altera os src das imagens conforme necessário
    $('#image1').attr('src', '../ccs/img/sushi.png');
    $('#image2').attr('src', '../css/img/ramen.png');

    // Atualiza o carrossel
    $('#menuCarousel').carousel(0); // Reinicia o carrossel para a primeira imagem
  });
});
