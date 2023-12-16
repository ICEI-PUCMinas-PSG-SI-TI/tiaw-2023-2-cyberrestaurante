<?php
if(isset($_POST['submit']))
{
   //print_r($_POST['nome']);
   //print_r($_POST['phone']);
   //print_r($_POST['message']);
   //print_r($_POST['person']);
   //print_r($_POST['reservation-date']);

   include_once ('cadastro.php');

   $nome = $_POST['nome'];
   $phone = $_POST['phone'];
   
   
   $data = $_POST['data'];

   $result = mysqli_query($conexao, "INSERT INTO cliente(nome,phone,data) 
   VALUES ('$nome','$phone','$data')");
  
}

 ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
        Primera meta tags
    -->

  <title>Estrela da Ásia</title>
  <meta name="title" content="Estrela Asiática - Sabor da Ásia">

  <!--
        icon
    -->


  <!--
         <img src="estrela.png" alt="Icone" width="200px" height="200px">
    -->


  <!--
    Link font google
   -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  <!--
    CSS
-->
  <link rel="stylesheet" href="./style.css">

  <!--
    Carregamento de imagem
-->
  <link rel="preload" as="imagem" href="assets/imgs/hero-slider-1.jpg">
  <link rel="preload" as="imagem" href="assets/imgs/hero-slider-2.jpg">
  <link rel="preload" as="imagem" href="assets/imgs/hero-slider-3.jpg">
</head>

<body>

  <!--
        #Preloader
    -->
  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Estrela</p>
  </div>



  <!--
        #TOP BAR
    -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Rua Walter Ianni, 255 - São Gabriel, Belo Horizonte - MG, 31980-110

        </span>

      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2"></div>
      <div class="icon">
        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
      </div>

      <span class="span">
        Aberto: 08h00 às 22h00
      </span>

      <a href="tel:+55 031 9 8922-3946" class="topbar-item">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>
        <span class="span">
          +55 031 9 8922-3946
        </span>
      </a>

      <div class="separator"></div>

      <a href="mailto:blayck34@icloud.com" class="topbar-item">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>
        <span class="span">
          blayck34@icloud.com
        </span>
      </a>


    </div>
  </div>



  <!--
        #HEADER
    -->

  <header class="header" data-header>

    <div class="container">

      <a href="#" class="logo">
        <img src="./estrela.png" width="160px" height="50" alt="Estrela - Home">
      </a>

      <nav class="navbar " data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon nome="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./estrela.png" width="160px" height="50" alt="Estrela - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="sparator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#Cardápio" class="navbar-link hover-underline ">
              <div class="sparator"></div>

              <span class="span">Cardápio</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#Sobre" class="navbar-link hover-underline ">
              <div class="sparator"></div>

              <span class="span">Sobre nós</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#chefs" class="navbar-link hover-underline ">
              <div class="sparator"></div>

              <span class="span">Nossos chefs</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="contado" class="navbar-link hover-underline ">
              <div class="sparator"></div>

              <span class="span">Contatos</span>
            </a>
          </li>


        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Venha nós conhecer</p>

          <address class="body-4">
            Rua Walter Ianni, 255 - São Gabriel, Belo Horizonte - MG, <br>
            CEP - 31980-110
          </address>

          <p class="body-4 navbar-text">Aberto: 09:30 as 02:30</p>
          <a href="Patrick:blayck34@icloud.com" class="body-4 sidebar-link">Patrick:blayck34@icloud.com</a>
          <div class="separator"></div>

          <p class="contact-label">Reserve seu pedido</p>

          <a href="tel:+55 031 9 8922-3946" class="body-1 contact-number hover-hunderline">
            +55 031 9 8922-3946
          </a>


        </div>
      </nav>
      >

      <a href="#" class="btn btn-secondary">

        <span class="text text-1">Encontre uma mesa</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>
      <section class="hero text-center" aria-label="home" id="home">
        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="assets/imgs/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-ver">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Tradição & Higiene</p>

            <h1 class="display-1 hero-title slider-reveal">
              Para os amantes de <br>
              comidas deliciosas
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venha com a família e sinta a alegria da comida de dar água na boca
            </p>

            <span class="text text-1">veja o nosso cardápio</span>
            <a href="" class="btn btn-primary slider-reveal">Cardápio</a>



          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="assets/imgs/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-ver">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Experiência deliciosa</p>

            <h1 class="display-1 hero-title slider-reveal">
              sabores inspirados <br>
              nas estações
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venha com a família e sinta a alegria da comida de dar água na boca
            </p>

            <span class="text text-2" aria-hidden="true">veja o nosso cardápio</span>
            <a href="" class="btn btn-primary slider-reveal">Cardápio</a>


          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="assets/imgs/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-ver">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Incrível e delicioso</p>

            <h1 class="display-1 hero-title slider-reveal">
              Onde cada sabor <br>
              conta uma história
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venha com a família e sinta a alegria da comida de dar água na boca
            </p>

            <span class="text text-1">veja o nosso cardápio</span>
            <a href="" class="btn btn-primary slider-reveal">Cardápio</a>



          </li>

        </ul>

        <button class="slider-btn prev" aria-label="arraste para o anterior" data-prev-btn="">
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="arraste para o próximo" data-next-btn>
          <ion-icon name="chevron-foward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="assets/imgs/hero-icon.png" width="48" height="48" alt="">

          <span class="label-2 text-center span">reservar uma mesa</span>
        </a>

      </section>

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">
          <div class="about-content">
            <p class="label-2 section subtitle" id="about-label">Nossa História</p>
            <h2 class="headline-1 section-title">Todo sabor conta uma história</h2>
            <div class="section-text">
              <p class="section-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatum temporibus aut optio magnam
                consectetur natus, deleniti facilis similique quae exercitationem corrupti ducimus laboriosam nihil
                perferendis fugit tempora vitae nisi.
              </p>

              <div class="contact-label">reservar através de chamada</div>

              <a href="tel:311515-1515" class="body-1 contact-number hover-underline">31 1515-1515</a>

              <a href="#" class="btn btn-primary">
                <span class="text text-1">Leia mais</span>

                <span class="text text-2" aria-hidden="true">Leia mais</span>
              </a>

            </div>
          </div>

          <figure class="about-banner">

            <img src="assets/imgs/about-banner.jpg" width="570" height="570" loading="lazy" alt="" class="w-100"
              data-parellax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="assets/imgs/about-abs-image.jpg" width="285" height="285" loading="lazy" alt="" class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="assets/imgs/badge-2-bg.png" width="133" height="134" loading="lazy" alt="">
            </div>

            <img src="assets/imgs/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

          </figure>

        </div>
      </section>

    </article>
  </main>


  <!-- 
        - #SERVICE
      -->

  <section class="section service bg-black-10 text-center" aria-label="service">
    <div class="container">

      <p class="section-subtitle label-2">Sabores para realeza</p>

      <h2 class="headline-1 section-title">Oferecemos alto nível</h2>

      <p class="section-text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industrys
        standard dummy text ever.
      </p>

      <ul class="grid-list">

        <li>
          <div class="service-card">

            <a href="#" class="has-before hover:shine">
              <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                <img src="assets/imgs/service-1.jpg" width="285" height="336" loading="lazy" alt="Breakfast"
                  class="img-cover">
              </figure>
            </a>

            <div class="card-content">

              <h3 class="title-4 card-title">
                <a href="#">Breakfast</a>
              </h3>

              <a href="#" class="btn-text hover-underline label-2">Menu</a>

            </div>

          </div>
        </li>

        <li>
          <div class="service-card">

            <a href="#" class="has-before hover:shine">
              <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                <img src="assets/imgs/service-2.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                  class="img-cover">
              </figure>
            </a>

            <div class="card-content">

              <h3 class="title-4 card-title">
                <a href="#">Aperitivos</a>
              </h3>

              <a href="#" class="btn-text hover-underline label-2">menu</a>

            </div>

          </div>
        </li>

        <li>
          <div class="service-card">

            <a href="#" class="has-before hover:shine">
              <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                <img src="assets/imgs/service-3.jpg" width="285" height="336" loading="lazy" alt="Drinks"
                  class="img-cover">
              </figure>
            </a>

            <div class="card-content">

              <h3 class="title-4 card-title">
                <a href="#">Drinks</a>
              </h3>

              <a href="#" class="btn-text hover-underline label-2">Menu</a>

            </div>

          </div>
        </li>

      </ul>

      <img src="assets/imgs/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
        class="shape shape-1 move-anim">
      <img src="assets/imgs/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
        class="shape shape-2 move-anim">

    </div>
  </section>





  <!-- 
        - #ABOUT
      -->







  <!-- 
        - #SPECIAL DISH
      -->

  <section class="special-dish text-center" aria-labelledby="dish-label">

    <div class="special-dish-banner">
      <img src="assets/imgs/special-dish-banner.jpg" width="940" height="900" loading="lazy" alt="special dish"
        class="img-cover">
    </div>

    <div class="special-dish-content bg-black-10">
      <div class="container">

        <img src="assets/imgs/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

        <p class="section-subtitle label-2">Prato especial</p>

        <h2 class="headline-1 section-title">Tortellini de lagosta</h2>

        <p class="section-text">
          Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the
          industrys standard dummy text ever since the when an unknown printer took a galley of type.
        </p>

        <div class="wrapper">
          <del class="del body-3">$40.00</del>

          <span class="span body-1">$20.00</span>
        </div>

        <a href="#" class="btn btn-primary">
          <span class="text text-1">Ver todo o menu</span>

          <span class="text text-2" aria-hidden="true">Ver todo o menu</span>
        </a>

      </div>
    </div>

    <img src="assets/imgs/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

    <img src="assets/imgs/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

  </section>





  <!-- 
        - #MENU
      -->

  <section class="section menu" aria-label="menu-label" id="menu">
    <div class="container">

      <p class="section-subtitle text-center label-2">Seleção Especial</p>

      <h2 class="headline-1 section-title text-center">Menu Delicioso</h2>

      <ul class="grid-list">

        <li>
          <div class="menu-card hover:card">

            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
              <img src="assets/imgs/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                class="img-cover">
            </figure>

            <div>

              <div class="title-wrapper">
                <h3 class="title-3">
                  <a href="#" class="card-title">Salada grega</a>
                </h3>

                <span class="badge label-1">Seasonal</span>

                <span class="span title-2">$25.50</span>
              </div>

              <p class="card-text label-1">
                Tomate, pimentão verde, pepino fatiado, cebola, azeitonas e queijo feta.
              </p>

            </div>

          </div>
        </li>

        <li>
          <div class="menu-card hover:card">

            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
              <img src="assets/imgs/menu-2.png" width="100" height="100" loading="lazy" alt="Lasagne" class="img-cover">
            </figure>

            <div>

              <div class="title-wrapper">
                <h3 class="title-3">
                  <a href="#" class="card-title">Lasanha</a>
                </h3>

                <span class="span title-2">$40.00</span>
              </div>

              <p class="card-text label-1">
                Legumes, queijos, carnes moídas, molho de tomate, temperos e especiarias </p>

            </div>

          </div>
        </li>

        <li>
          <div class="menu-card hover:card">

            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
              <img src="assets/imgs/menu-3.png" width="100" height="100" loading="lazy" alt="Butternut Pumpkin"
                class="img-cover">
            </figure>

            <div>

              <div class="title-wrapper">
                <h3 class="title-3">
                  <a href="#" class="card-title">Abóbora</a>
                </h3>

                <span class="span title-2">$10.00</span>
              </div>

              <p class="card-text label-1">
                Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.
              </p>

            </div>

          </div>
        </li>

        <li>
          <div class="menu-card hover:card">

            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
              <img src="assets/imgs/menu-4.png" width="100" height="100" loading="lazy" alt="Tokusen Wagyu"
                class="img-cover">
            </figure>

            <div>

              <div class="title-wrapper">
                <h3 class="title-3">
                  <a href="#" class="card-title">Tokusen Wagyu</a>
                </h3>

                <span class="badge label-1">Novo</span>

                <span class="span title-2">$39.00</span>
              </div>

              <p class="card-text label-1">
                Legumes, queijos, carnes moídas, molho de tomate, temperos e especiarias. </p>

            </div>

          </div>
        </li>

        <li>
          <div class="menu-card hover:card">

            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
              <img src="assets/imgs/menu-5.png" width="100" height="100" loading="lazy" alt="Olivas Rellenas"
                class="img-cover">
            </figure>

            <div>

              <div class="title-wrapper">
                <h3 class="title-3">
                  <a href="#" class="card-title">Olivas Rellenas</a>
                </h3>

                <span class="span title-2">$25.00</span>
              </div>

              <p class="card-text label-1">
                Abacates com carne de siri, cebola roxa, salada de siri recheada com pimentão vermelho e pimentão verde.
              </p>

            </div>

          </div>
        </li>

        <li>
          <div class="menu-card hover:card">

            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
              <img src="assets/imgs/menu-6.png" width="100" height="100" loading="lazy" alt="Opu Fish"
                class="img-cover">
            </figure>

            <div>

              <div class="title-wrapper">
                <h3 class="title-3">
                  <a href="#" class="card-title">Peixe Opu</a>
                </h3>

                <span class="span title-2">$49.00</span>
              </div>

              <p class="card-text label-1">
                Legumes, queijos, carnes moídas, molho de tomate, temperos e especiarias </p>

            </div>

          </div>
        </li>

      </ul>

      <p class="menu-text text-center">
        Durante o inverno diariamente a partir de <span class="span">08:00 </span> a <span class="span">22:00 </span>
      </p>

      <a href="#" class="btn btn-primary">
        <span class="text text-1">Ver todo o menu</span>

        <span class="text text-2" aria-hidden="true">Ver todo o menu</span>
      </a>

      <img src="./assets/images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
        class="shape shape-2 move-anim">
      <img src="./assets/images/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
        class="shape shape-3 move-anim">

    </div>
  </section>





  <!-- 
        - #TESTIMONIALS
      -->

  <section class="section testi text-center has-bg-image"
    style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
    <div class="container">

      <div class="quote">”</div>

      <p class="headline-2 testi-text">
        Queria agradecer por me convidar para aquele jantar incrível naquela noite. A comida estava extraordinaria.

      </p>

      <div class="wrapper">
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
      </div>

      <div class="profile">
        <img src="assets/imgs/testi-avatar.jpg" width="100" height="100" loading="lazy" alt="Patrick" class="img">

        <p class="label-2 profile-name">Patrick</p>
      </div>

    </div>
  </section>





  <!-- 
        - #RESERVATION
      -->

  <section class="reserva">
    <div class="container">

      <div class="form reservation-form bg-black-10">

        <form action="index.php"   method="post" class="form-left">

          <h2 class="headline-1 text-center">Reserva Online</h2>

          <p class="form-text text-center">
            Pedido de reserva <a href="tel:123123456" class="link">031 98922-3946</a>
            preencha o formulário de pedido
          </p>

          <div class="input-wrapper">
            <input type="text" name="nome" placeholder="Seu nome" autocomplete="off" class="input-field">

            <input type="tel" name="phone" placeholder="Telefone" autocomplete="off" class="input-field">
          </div>

          <div class="input-wrapper">

            <div class="icon-wrapper">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <select name="person" class="input-field">
                <option value="1-person">1 Pessoas</option>
                <option value="2-person">2 Pessoas</option>
                <option value="3-person">3 Pessoas</option>
                <option value="4-person">4 Pessoas</option>
                <option value="5-person">5 Pessoas</option>
                <option value="6-person">6 Pessoas</option>
                <option value="7-person">7 Person</option>
              </select>

              <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
            </div>

            <div class="icon-wrapper">
              <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

              <input type="date" name="data" class="input-field">

              <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
            </div>

            <div class="icon-wrapper">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <select name="person" class="input-field">
                <option value="08:00am">08 : 00 </option>
                <option value="09:00am">09 : 00 </option>
                <option value="010:00am">10 : 00 </option>
                <option value="011:00am">11 : 00 </option>
                <option value="012:00am">12 : 00 </option>
                <option value="01:00pm">13 : 00 </option>
                <option value="02:00pm">14 : 00 </option>
                <option value="03:00pm">15 : 00 </option>
                <option value="04:00pm">16 : 00 </option>
                <option value="05:00pm">17 : 00 </option>
                <option value="06:00pm">18 : 00 </option>
                <option value="07:00pm">19 : 00 </option>
                <option value="08:00pm">20 : 00 </option>
                <option value="09:00pm">21 : 00 </option>
                <option value="10:00pm">22 : 00 </option>
              </select>

              <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
            </div>

          </div>

          <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

          

          <button type="submit" name="submit" class="btn btn-secondary">  
            <span class="text text-1">Reservar uma mesa</span>

            <span class="text text-2" aria-hidden="true">Reservar uma mesa</span>
          </button>

        </form>

        <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

          <h2 class="headline-1 text-center">Contate-nos</h2>

          <p class="contact-label">Pedido de reserva</p>

          <a href="tel:31 98922-3946" class="body-1 contact-number hover-underline">31 98922-3946</a>

          <div class="separator"></div>

          <p class="contact-label">Localização</p>

          <address class="body-4">
            Rua Walter Ianni, 255 - São Gabriel, Belo Horizonte - MG, 31980-110
          </address>

          <p class="contact-label">Hora do almoço</p>

          <p class="body-4">
            de segunda a Domingo <br>
            11h00 - 14h30
          </p>

          <p class="contact-label">Hora do jantar</p>

          <p class="body-4">
            de segunda a Domingo <br>
            17h00 - 22h00
          </p>

        </div>

      </div>

    </div>
  </section>





  <!-- 
        - #FEATURES
      -->

  <section class="section features text-center" aria-label="features">
    <div class="container">

      <p class="section-subtitle label-2">Porque escolher-nos</p>

      <h2 class="headline-1 section-title">Nossa força</h2>

      <ul class="grid-list">

        <li class="feature-item">
          <div class="feature-card">

            <div class="card-icon">
              <img src="assets/imgs/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
            </div>

            <h3 class="title-2 card-title">Alimentos saudaveis</h3>

            <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

          </div>
        </li>

        <li class="feature-item">
          <div class="feature-card">

            <div class="card-icon">
              <img src="assets/imgs/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
            </div>

            <h3 class="title-2 card-title">Ambiente Fresco</h3>

            <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

          </div>
        </li>

        <li class="feature-item">
          <div class="feature-card">

            <div class="card-icon">
              <img src="assets/imgs/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
            </div>

            <h3 class="title-2 card-title">Chefs qualificados</h3>

            <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

          </div>
        </li>

        <li class="feature-item">
          <div class="feature-card">

            <div class="card-icon">
              <img src="assets/imgs/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
            </div>

            <h3 class="title-2 card-title">Evento e Festa</h3>

            <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

          </div>
        </li>

      </ul>

      <img src="assets/imgs/event-3.jpg" 208" height="178" loading="lazy" alt="shape" class="shape shape-1">

      <img src="assets/imgs/shape-8.png" width="120" height="115" loading="lazy" alt="shape" class="shape shape-2">

    </div>
  </section>





  <!-- 
        - #EVENT
      -->

  <section class="section event bg-black-10" aria-label="event">
    <div class="container">

      <p class="section-subtitle label-2 text-center">Atualizações recentes</p>

      <h2 class="section-title headline-1 text-center">Próximos eventos</h2>

      <ul class="grid-list">

        <li>
          <div class="event-card has-before hover:shine">

            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
              <img src="assets/imgs/event-1.jpg" width="350" height="450" loading="lazy"
                alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

              <time class="publish-date label-2" datetime="2023-09-15">15/09/2023</time>
            </div>

            <div class="card-content">
              <p class="card-subtitle label-2 text-center">Comida, Sabor</p>

              <h3 class="card-title title-2 text-center">
                Flavour so good you’ll try to eat with your eyes.
              </h3>
            </div>

          </div>
        </li>

        <li>
          <div class="event-card has-before hover:shine">

            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
              <img src="assets/imgs/event-2.jpg" width="350" height="450" loading="lazy"
                alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

              <time class="publish-date label-2" datetime="2023-09-08">08/09/2023</time>
            </div>

            <div class="card-content">
              <p class="card-subtitle label-2 text-center">Comida saudável</p>

              <h3 class="card-title title-2 text-center">
                Flavour so good you’ll try to eat with your eyes.
              </h3>
            </div>

          </div>
        </li>

        <li>
          <div class="event-card has-before hover:shine">

            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
              <img src="assets/imgs/event-3.jpg" width="350" height="450" loading="lazy"
                alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

              <time class="publish-date label-2" datetime="2023-09-03">03/09/2023</time>
            </div>

            <div class="card-content">
              <p class="card-subtitle label-2 text-center">Receita</p>

              <h3 class="card-title title-2 text-center">
                Sabor tão bom que você vai tentar comer com os olhos.
              </h3>
            </div>

          </div>
        </li>

      </ul>

      <a href="#" class="btn btn-primary">
        <span class="text text-1">Veja nosso blog</span>

        <span class="text text-2" aria-hidden="true">Veja nosso blog</span>
      </a>

    </div>
  </section>

  </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="assets/imgs/estrela.png" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
            Rua Walter Ianni, 255 - São Gabriel, Belo Horizonte - MG, 31980-110
          </address>

          <a href="mailto:booking@grilli.com" class="body-4 contact-link">blayck34@icloud.com</a>

          <a href="tel:+88123123456" class="body-4 contact-link"></a>

          <p class="body-4">
            Aberto : 09:00 - 23:00
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>





          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Seu e-mail" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Subscribe</span>

              <span class="text text-2" aria-hidden="true">Subscribe</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Menus</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Sobre nós</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Nossos Chefs</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Contato</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">



      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>

<!--
    Link JS
-->
<script src="script.js"></script>
<!--
link iônico
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>