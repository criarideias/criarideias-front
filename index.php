<?php

include("./php/connection.php");
include("./php/mainPage.php");

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <script
      src="https://kit.fontawesome.com/3f3417947e.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/index-responsive.css" />
    <title>Criar Ideias - Home</title>
  </head>
  <body>
    <nav class="header">
      <main class="nav-top">
        <img src="./assets/logo_site_branco.png" alt="" />
        <div class="nav-sections">
          <a href="#home">Home</a>
          <a href="#sobre">Quem Somos</a>
          <a href="#servicos">Serviços</a>
          <a href="#clientes">Clientes</a>
          <a href="#planos">Planos</a>
          <a href="#contato">Contato</a>
        </div>
      </main>
    </nav>

    <main class="nav-mobile">
      <main class="inner-nav">
        <img src="./assets/logo_site_branco.png" alt="" />
        <input type="checkbox" id="check-menu" class="check-menu" />
        <label class="menu-icon" for="check-menu">
          <span></span>
        </label>
        <label class="menu-background" for="check-menu"></label>
        <main class="menu-box">
          <a href="#home">
            <label for="check-menu"> Home </label>
          </a>
          <a href="#sobre">
            <label for="check-menu"> Quem Somos </label>
          </a>
          <a href="#servicos">
            <label for="check-menu"> Serviços </label>
          </a>
          <a href="#clientes">
            <label for="check-menu"> Clientes </label>
          </a>
          <a href="#planos">
            <label for="check-menu"> Planos </label>
          </a>
          <a href="#contato">
            <label for="check-menu"> Contato </label>
          </a>
        </main>
      </main>
    </main>

    <section class="top-box" id="home">
      <main class="top-left">
        <div class="top-text">
          <h2>A AGÊNCIA MAIS CRIATIVA DA <span>REGIÃO</span></h2>
          <p>
            Somos uma empresa especializada na atividade de conectar os
            produtores/donos de um produto ou serviço com os clientes, quer
            existentes ou potenciais.
            <br />
            Trabalhamos pelos métodos de aplicação de marketing estratégico
            individual, uma vez que entendemos que cada empresa/negócio carregam
            consigo necessidades e demandas singulares, a qual devem ser
            respeitadas e potencializadas, pois acreditamos que a
            particularidade de cada negócio é o fator de sucesso do mesmo.
            <br />
            Nosso trabalho hoje é reconhecido por sermos referência em processos
            criativos, criações de identidade visual, planejamento estratégico e
            tecnologias digitais.
          </p>

          <div class="top-buttons">
            <a href="#contato">
            <button class="explore">Entre em Contato</button>
            </a>
          </div>
        </div>
      </main>
      <main class="top-right">
        <div class="img-box">
          <img src="./assets/lampada.png" alt="" />
        </div>
      </main>
    </section>

    <section class="parceiros" id="clientes">
      <div class="service-text">
        <h2>Nossos <span>Clientes</span></h2>
      </div>

      <div class="slider" id="slider">
        <div class="slide" id="slide">
          <div class="parceiro-box">
            <div class="parceiro-box-inner">
              <img src="./assets/logo_site_branco.png" alt="" />
            </div>
          </div>
          <div class="parceiro-box">
            <div class="parceiro-box-inner">
              <img src="./assets/logosite branco.png" alt="" />
            </div>
          </div>
          <div class="parceiro-box">
            <div class="parceiro-box-inner">
              <img src="./assets/logo_site_branco.png" alt="" />
            </div>
          </div>
          <div class="parceiro-box">
            <div class="parceiro-box-inner">
              <img src="./assets/logo_site_branco.png" alt="" />
            </div>
          </div>
          <div class="parceiro-box">
            <div class="parceiro-box-inner">
              <img src="./assets/logo_site_branco.png" alt="" />
            </div>
          </div>
          <div class="parceiro-box">
            <div class="parceiro-box-inner">
              <img src="./assets/logo_site_branco.png" alt="" />
            </div>
          </div>
          <div class="parceiro-box">
            <div class="parceiro-box-inner">
              <img src="./assets/logo_site_branco.png" alt="" />
            </div>
          </div>
          <div class="parceiro-box">
            <div class="parceiro-box-inner">
              <img src="./assets/logo_site_branco.png" alt="" />
            </div>
          </div>
        </div>
        <div class="slider-control">
          <button class="ctrl-btn pro-prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </button>
          <button class="ctrl-btn pro-next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </section>

    <section class="evolution-area" id="servicos">
      <div class="evolution-text">
        <h2>Transforme seu negócio em um <span>FOGUETE</span></h2>
        <h3>A Criar Ideias levará seu negócio as alturas</h3>
      </div>

      <main class="rocket-info">
        <div class="rocket-decoration">
          <div class="rocket-img">
            <img src="./assets/Foguete3D.png" alt="" />
          </div>
          <div class="boneco-img"></div>
        </div>

        <div class="rocket-numbers" data-module="countup">
          <div class="rocket-box" data-tilt>
            <h2
              data-contar-ate-numero="1,000,000"
              data-duracao-de-animacao="10000"
            >
              1.000.000
            </h2>
            <h3>
              Quantas pessoas vao ver seu <span class="deco-text">FOGUETE</span>
            </h3>
          </div>
          <div class="rocket-box" data-tilt>
            <h2
              data-contar-ate-numero="1,000,000"
              data-duracao-de-animacao="100000"
            >
              1.000.000
            </h2>
            <h3>
              Novos Clientes conhecerão seu
              <span class="deco-text">NEGÓCIO</span>
            </h3>
          </div>

          <div class="rocket-box" data-tilt>
            <h2>
              <span
                data-contar-ate-numero="1,000,000"
                data-duracao-de-animacao="3000000"
                >1.000.000</span
              >%
            </h2>
            <h3>
              Taxa de Crescimento do seu <span class="deco-text">FOGUETE</span>
            </h3>
          </div>
        </div>
        <div class="aviso">
          <h4>Valores ilustrativos</h4>

          <h2>Role para Baixo!</h2>
        </div>
      </main>
    </section>

    <section class="about-us" id="sobre">
      <div class="about-text">
        <h2>Quem <span>Somos?</span></h2>
      </div>
      <main class="top-division">
        <div class="about-left">
          <div class="about-img">
            <img src="./assets/astronauta.png" alt="" />
          </div>
        </div>
        <div class="about-right">
          <h2>
            MAIS QUE UMA AGÊNCIA,
            <span>A REVOLUÇAO CRIATIVA QUE SEU NEGOCIO PRECISA</span>
          </h2>
          <h3>
            O nosso maior desafio é fazer do seu negocio um empreendimento de
            sucesso.
            <br />
            <br />
            Nosso prazer é mostrar como sua empresa e seus colaboradores podem
            decolar, com bagagem, experiencia e resultados INCRÍVEIS.
          </h3>
          <div class="resultados">
            <div class="resultados-box">
              <h2>
                <div class="plus">+</div>
                <span class="resultados-number">6</span>
              </h2>
              <h3>Estados</h3>
            </div>
            <div class="resultados-box">
              <h2>
                <div class="plus">+</div>
                <span class="resultados-number">35</span>
              </h2>
              <h3>Cidades</h3>
            </div>
            <div class="resultados-box">
              <h2>
                <div class="plus">+</div>
                <span class="resultados-number">45</span>
              </h2>
              <h3>Projetos</h3>
            </div>
            <div class="resultados-box">
              <h2>
                <div class="plus">+</div>
                <span class="resultados-number">750</span>
              </h2>
              <h3>Clientes</h3>
            </div>
          </div>
        </div>
      </main>
    </section>

    <section class="stage-area">
      <div class="stage-text">
        <h2>Todos Os Nossos Projetos Envolvem 5 Etapas!</h2>
      </div>

      <main class="stage-flex">
        <div class="stage-box">
          <h2>ANAMNESE/REMINISCÊNCIA</h2>
          <p>
            Esse é o primeiro contato que temos com nosso cliente uma vez que
            ele contrata nossos serviços. Esse primeiro contato é para responder
            algumas perguntas, para que possamos entender a história daquela
            empresa/negócio, como surgiu, quem fundou, quais são os princípios e
            objetivos dessa instituição. Esse é o momento de conhecer a fundo e
            de forma criteriosa, afim de levantar informações que serão de
            extrema valia para o próximo passo.
          </p>
        </div>

        <div class="stage-box">
          <h2>DESENVOLVIMENTO DE ESTRATÉGIAS</h2>
          <p>
            Esse é o momento que, uma vez que são levantadas todas as
            necessidades e expectativas do cliente/negocio, é chegada a hora de
            alinha-las as melhores estratégias e metodologias que proporcionaram
            para a mesma o alcance dos objetivos, outrora propostos na
            anamnese/reminiscência.
          </p>
        </div>

        <div class="stage-box">
          <h2>BRIEFING</h2>
          <p>
            Agora que já conhecemos o negócio/empresa, já sabemos quais
            estratégias e metodologias a serem usadas, é a hora de desenvolver o
            briefing, o mesmo que pode ser tanto da marca, quanto do conteúdo de
            redes socias, web site e demais. Esse documento nada mais é do que o
            roteiro do que há de ser realizado para que se alcance o resultado
            esperado.
          </p>
        </div>

        <div class="stage-box">
          <h2>EXECUÇÃO</h2>
          <p>
            Com todos esses processos bem elaborados, chegou a hora da execução,
            e é aqui que o dinamismo acontece, é aqui onde as engrenagens se
            encaixam e tudo começa a criar forma, e para uma execução de
            qualidade contamos com uma equipe altamente capacitada para melhor
            entrega de resultados.
          </p>
        </div>

        <div class="stage-box">
          <h2>ALINHAMENTO DE ESTRATÉGIA</h2>
          <p>
            Uma vez que executamos todo o planejamento acima citado, agora é a
            hora em que avaliamos todos os trabalhos executados, é aqui que
            medimos expectativas vs realidade. É nesse alinhamento que
            entendemos os métodos que foram benéficos e os que não nos trouxeram
            o retorno esperado, e é através desse alinhamento que desenvolvemos
            os planejamentos vindouros.
          </p>
        </div>
      </main>

      <div class="stage-text">
        <h3>
          COM UMA EQUIPE DE EXPERTS E NOSSA EXPERIÊNCIA, É SÓ SE PREPARAR PARA
          <span>DECOLAR</span> E <span>VENDER</span>!
        </h3>
      </div>
    </section>

    <section class="service-area">
      <div class="service-text">
        <h2>
          COM A <span>CRIAR IDEIAS</span> O SEU NEGÓCIO VAI
          <span>MUITO MAIS LONGE</span>
        </h2>
      </div>

      <main class="service-flex">
        <div class="service-box">
          <div class="service-box-text">
            <h2>Marketing estratégico individual</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Sites Exclusivos</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>E-Comerces Premium</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Blogs e Canal no Youtube</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Landingpages Estratégicas</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Tráfego Pago Direcionado</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Desenvolvimento completo de Briefing e branding</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Desenvolvimento Completo de Briefing e Branding</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Personalizados em Geral para Seu negócio</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Mentorias e Consultorias Administrativas</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="service-box">
          <div class="service-box-text">
            <h2>Promoção de Eventos</h2>
          </div>
        </div>
      </main>
    </section>

    <section class="cards" id="planos">
      <div class="price-text">
        <h2>Nossos <span>Planos</span></h2>
        <h3>Clique no plano que <span>Deseja!</span></h3>
      </div>

      <!--Cards Basic-->

      <div
        class="card-box2 bronze"
        data-tilt
        data-tilt-max="15"
        data-tilt-speed="1000"
        data-tilt-perspective="900"
      >
        <span></span>
        <div class="inner-card">
          <h3 class="card-tittle">Bronze</h3>
          <div class="card-text">
            <h4>R$</h4>
            <h2>500</h2>
            <h4>/Mês</h4>
          </div>
          <ul>
            <li>
              <div class="flex-text">
                <h3>Social Media</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Briefing & Execução</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Trafego Pago</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>WebSite Premium</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Mentoria Financeira</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Atendimento Priorizado</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Treinamento de Equipes</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div
        class="card-box2 silver"
        data-tilt
        data-tilt-max="15"
        data-tilt-speed="1000"
        data-tilt-perspective="900"
      >
        <span></span>
        <div class="inner-card">
          <h3 class="card-tittle">Silver</h3>
          <div class="card-text">
            <h4>R$</h4>
            <h2>900</h2>
            <h4>/Mês</h4>
          </div>
          <ul>
            <li>
              <div class="flex-text">
                <h3>Social Media</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Briefing & Execução</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Trafego Pago</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>WebSite Premium</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Mentoria Financeira</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Atendimento Priorizado</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Treinamento de Equipes</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div
        class="card-box2 emerald"
        data-tilt
        data-tilt-max="15"
        data-tilt-speed="1000"
        data-tilt-perspective="900"
      >
        <span></span>
        <div class="inner-card">
          <h3 class="card-tittle">Emerald</h3>
          <div class="card-text">
            <h4>R$</h4>
            <h2>1300</h2>
            <h4>/Mês</h4>
          </div>
          <ul>
            <li>
              <div class="flex-text">
                <h3>Social Media</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Briefing & Execução</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Trafego Pago</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>WebSite Premium</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Mentoria Financeira</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Atendimento Priorizado</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Treinamento de Equipes</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!--Cards Premium-->

      <div
        class="card-box gold"
        data-tilt
        data-tilt-max="15"
        data-tilt-speed="1000"
        data-tilt-perspective="900"
      >
        <span></span>
        <div class="inner-card">
          <h3 class="card-tittle">Gold</h3>
          <div class="card-text">
            <h4>R$</h4>
            <h2>3000</h2>
            <h4>/Mês</h4>
          </div>
          <ul>
            <li>
              <div class="flex-text">
                <h3>Social Media</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Briefing & Execução</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Trafego Pago</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>WebSite Premium</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Mentoria Financeira</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Atendimento Priorizado</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Treinamento de Equipes</h3>
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div
        class="card-box diamond"
        data-tilt
        data-tilt-max="15"
        data-tilt-speed="1000"
        data-tilt-perspective="900"
      >
        <span></span>
        <div class="inner-card">
          <h3 class="card-tittle">Diamond</h3>
          <div class="card-text">
            <h4>R$</h4>
            <h2>3600</h2>
            <h4>/Mês</h4>
          </div>
          <ul>
            <li>
              <div class="flex-text">
                <h3>Social Media</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Briefing & Execução</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Trafego Pago</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>WebSite Premium</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Mentoria Financeira</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Atendimento Priorizado</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
            <li>
              <div class="flex-text">
                <h3>Treinamento de Equipes</h3>
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="rodape" id="contato">
      <main class="rodape-division">
        <div class="endereco">
          <h2>Endereço</h2>
          <h3>
            Av. João Alves do Nascimento, 2264 sala 304 Centro - Patrocinio - Mg
            CEP 38744-4242
          </h3>
          <h2 class="contato">Contato</h2>
          <a href="https://wa.me/5534998254450?text=Ol%C3%A1+Jhonatas%2C+visitei+seu+site+e+gostaria+de+entender+mais+sobre+a+Criar%21"
          target="_blank"
            ><i class="fa fa-headphones" aria-hidden="true"></i> 34
            99825-4450</a
          >
          <a href="mailto:comercial@criarideias.com.br"
          target="_blank"
            ><i class="fa fa-envelope-o" aria-hidden="true"></i>
            comercial@criarideias.com.br</a
          >
        </div>
        <div class="outros">
          <h2>Se Localize Por Aqui!</h2>
          <a href="#home">Home</a>
          <a href="#sobre">Quem Somos</a>
          <a href="#servicos">Serviços</a>
          <a href="#clientes">Clientes</a>
          <a href="#planos">Planos</a>
          <a href="#contato">Contato</a>
        </div>
      </main>
    </section>

    <script src="./scripts/counter.js" type="module"></script>
    <script src="./scripts/vanilla-tilt.js"></script>
    <script src="./scripts/slider.js"></script>
  </body>
</html>
