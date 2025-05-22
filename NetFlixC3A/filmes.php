<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <title>CLTV - Filmes</title>
</head>
<body class="fundo">

  <header class="w-100 container-fluid text-center">
    <nav class="navbar row pt-4 pb-4 mb-4 bg-black">
        
        <div class="col-4">
          <a class="navbar-brand" href="index.php">
            <img src="imgs/cltv.png" alt="Logo" width="100" height="85" class="d-inline-block align-text-top" />
          </a>
        </div>
        <div class="col-4 pt-2 text-white rowdies-light">
          CLTV
        </div>
        <div class="col-2 text-white link anton-regular">
          <a href="filmes.php">Filmes</a>
        </div>
        <div class="col-2 text-white link anton-regular">
          <a href="series.php">Séries</a>
        </div>
      </nav>
  </header>

  <main class="w-75 m-auto">
    <?php
      $filmes = [
        "AÇÃO" => [
          ["titulo" => "Batman", "imagem" => "Imagens/acao/batman.jpg"],
          ["titulo" => "Deadpool", "imagem" => "Imagens/acao/deadpool.jpg"],
          ["titulo" => "Doutor Estranho", "imagem" => "Imagens/acao/drestranho.jpg"],
          ["titulo" => "Em Ritmo de Fuga (Baby Driver)", "imagem" => "Imagens/acao/em-ritmo-de-fuga-baby-driver-filme.webp"],
          ["titulo" => "John Wick", "imagem" => "Imagens/acao/john.jpg"],
          ["titulo" => "Taxi Driver", "imagem" => "Imagens/acao/Taxi_Driver.webp"],
          ["titulo" => "Uncharted", "imagem" => "Imagens/acao/uncharted.jpg"],
          ["titulo" => "Vingança Fatal", "imagem" => "Imagens/acao/vingançafatal.webp"]
        ],
        "COMÉDIA" => [
          ["titulo" => "Até que a Sorte nos Separe", "imagem" => "Imagens/comedia/atequeasorte.jpg"],
          ["titulo" => "Bad Boys", "imagem" => "Imagens/comedia/badboys.jpg"],
          ["titulo" => "As Branquelas", "imagem" => "Imagens/comedia/branquelas.webp"],
          ["titulo" => "Gente Grande", "imagem" => "Imagens/comedia/gentegrande.jpg"],
          ["titulo" => "Intocáveis", "imagem" => "Imagens/comedia/intocaveis.jpg"],
          ["titulo" => "O Máskara", "imagem" => "Imagens/comedia/mask.jpg"],
          ["titulo" => "Zohan", "imagem" => "Imagens/comedia/zohan.webp"]
        ],
        "FANTASIA" => [
          ["titulo" => "Alice no País das Maravilhas", "imagem" => "Imagens/fantasia/alice.jpg"],
          ["titulo" => "Branca de Neve e o Caçador", "imagem" => "Imagens/fantasia/brancadeneve.jpg"],
          ["titulo" => "Harry Potter e a Pedra Filosofal", "imagem" => "Imagens/fantasia/harrypotter.webp"],
          ["titulo" => "As Crônicas de Nárnia", "imagem" => "Imagens/fantasia/narnia.jpg"],
          ["titulo" => "O Mágico de Oz", "imagem" => "Imagens/fantasia/omagicodeoz.jpg"],
          ["titulo" => "Peter Pan", "imagem" => "Imagens/fantasia/peterpan.jpg"],
          ["titulo" => "Shrek", "imagem" => "Imagens/fantasia/shrek.png"]
        ],
        "ROMANCE" => [
          ["titulo" => "10 Coisas que Eu Odeio em Você", "imagem" => "Imagens/romance/10coisasqueeuodeioemvoce.jpg"],
          ["titulo" => "500 Dias com Ela", "imagem" => "Imagens/romance/500diascomela.webp"],
          ["titulo" => "Esposa de Mentirinha", "imagem" => "Imagens/romance/esposadementirinha.jpg"],
          ["titulo" => "Mamma Mia!", "imagem" => "Imagens/romance/mammamia.jpg"],
          ["titulo" => "Minha Culpa", "imagem" => "Imagens/romance/minhaculpa.jpg"],
          ["titulo" => "Um Lugar Chamado Notting Hill", "imagem" => "Imagens/romance/Notting_Hill.jpg"],
          ["titulo" => "Romeu e Julieta", "imagem" => "Imagens/romance/romeuejulieta.jpg"],
          ["titulo" => "Titanic", "imagem" => "Imagens/romance/Titanic_poster.jpg"]
        ],
        "TERROR" => [
          ["titulo" => "1922", "imagem" => "Imagens/terror/1922_-_Filme_de_2017.png"],
          ["titulo" => "A Entidade", "imagem" => "Imagens/terror/aentidade.jpg"],
          ["titulo" => "Atividade Paranormal", "imagem" => "Imagens/terror/atividadeparanormal.webp"],
          ["titulo" => "A Hora do Pesadelo", "imagem" => "Imagens/terror/horadopesadelo.webp"],
          ["titulo" => "It: A Coisa", "imagem" => "Imagens/terror/itacoisa.webp"],
          ["titulo" => "Pânico 4", "imagem" => "Imagens/terror/panico4.jpg"],
          ["titulo" => "O Quadrado", "imagem" => "Imagens/terror/quadradofilme.jpg"]
        ]
      ];

      // Pega o gênero selecionado na query string, padrão 'acao' se não tiver 
      $generoSelecionado = isset($_GET['genero']) ? strtoupper($_GET['genero']) : 'AÇÃO';

      //if ($_GET['genero']) {
    //$generoSelecionado = $_GET['genero'];
    //} else {
    //$generoSelecionado = 'AÇÃO';
    //}


      $filmesFiltrados = $filmes[$generoSelecionado];

      
      $total = count($filmesFiltrados);
      $cardsPorSlide = 3;
      $primeiro = true;
      ?>

      <div class="dropdown pb-4">
        <button class="btn btn-purple dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Gênero
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="?genero=AÇÃO">Ação</a></li>
          <li><a class="dropdown-item" href="?genero=COMÉDIA">Comédia</a></li>
          <li><a class="dropdown-item" href="?genero=TERROR">Terror</a></li>
          <li><a class="dropdown-item" href="?genero=FANTASIA">Fantasia</a></li>
          <li><a class="dropdown-item" href="?genero=ROMANCE">Romance</a></li>
        </ul>
      </div>

      <h1>| GÊNERO: <?= $generoSelecionado ?></h1>
      <div class="container mt-5" style="min-height: 400px;">
        <div id="carouselCards" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner" id="carousel-inner">
            <?php
            for ($i = 0; $i < $total; $i += $cardsPorSlide):
              $classe = $primeiro ? "carousel-item active" : "carousel-item";
              $primeiro = false;
            ?>
              <div class="<?= $classe ?>">
                <div class="row justify-content-center">
                  <?php for ($j = $i; $j < $i + $cardsPorSlide && $j < $total; $j++):
                    $titulo = $filmesFiltrados[$j]['titulo'];
                    $imagem = $filmesFiltrados[$j]['imagem'];
                  ?>
                    <div class="col-md-4 mb-3">
                      <div class="card altura-maior p-0 border-0">
                        <img src="<?= $imagem ?>" class="w-100 h-100 object-fit-cover" alt="<?= $titulo ?>" onerror="this.src='https://via.placeholder.com/300x180?text=Imagem+Indisponível'">
                      </div>
                    </div>
                  <?php endfor; ?>
                </div>
              </div>
            <?php endfor; ?>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselCards" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselCards" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>


    
    <h1>|TODOS</h1>
    <?php

$filmes = [
  "acao" => [
    [
      "titulo" => "Batman: O Cavaleiro das Trevas",
      "imagem" => "Imagens/acao/batman.jpg",
      "atores" => "Christian Bale, Heath Ledger",
      "diretor" => "Christopher Nolan",
      "ano" => 2008,
      "classificacao" => "14",
      "sinopse" => "Com a ajuda do tenente Jim Gordon e do promotor Harvey Dent, Batman combate o crime organizado em Gotham. No entanto, um novo criminoso conhecido como Coringa surge para espalhar o caos."
    ],
    [
      "titulo" => "Deadpool & Wolverine",
      "imagem" => "Imagens/acao/deadpool.jpg",
      "atores" => "Ryan Reynolds, Hugh Jackman",
      "diretor" => "Shawn Levy",
      "ano" => 2024,
      "classificacao" => "18",
      "sinopse" => "Wade Wilson se junta a Wolverine para enfrentar um inimigo poderoso. Nessa jornada interdimensional, humor ácido e ação intensa marcam o retorno do Mercenário Tagarela."
    ],
    [
      "titulo" => "Doutor Estranho no Multiverso da Loucura",
      "imagem" => "Imagens/acao/drestranho.jpg",
      "atores" => "Benedict Cumberbatch, Elizabeth Olsen",
      "diretor" => "Sam Raimi",
      "ano" => 2022,
      "classificacao" => "12",
      "sinopse" => "Doutor Estranho explora as realidades alternativas do multiverso com a ajuda de novos e antigos aliados, enfrentando inimigos surpreendentes enquanto lida com as consequências de seus próprios atos."
    ],
    [
      "titulo" => "Em Ritmo de Fuga (Baby Driver)",
      "imagem" => "Imagens/acao/em-ritmo-de-fuga-baby-driver-filme.webp",
      "atores" => "Ansel Elgort, Lily James",
      "diretor" => "Edgar Wright",
      "ano" => 2017,
      "classificacao" => "16",
      "sinopse" => "Um jovem motorista especialista em fugas usa a música para ser o melhor no volante. Quando tenta sair da vida do crime, ele se vê forçado a participar de um último golpe que pode colocar tudo a perder."

    ],
    [
      "titulo" => "John Wick",
      "imagem" => "Imagens/acao/john.jpg",
      "atores" => "Keanu Reeves, Ian McShane",
      "diretor" => "Chad Stahelski",
      "ano" => 2014,
      "classificacao" => "16",
      "sinopse" => "Após perder sua esposa, um ex-assassino de aluguel volta à ação em busca de vingança quando ladrões invadem sua casa e matam seu cachorro — o último presente da falecida. Sua sede por justiça desencadeia uma guerra no submundo do crime."
    ],
    [
      "titulo" => "Taxi Driver",
      "imagem" => "Imagens/acao/Taxi_Driver.webp",
      "atores" => "Robert De Niro, Jodie Foster",
      "diretor" => "Martin Scorsese",
      "ano" => 1976,
      "classificacao" => "18",
      "sinopse" => "Travis Bickle, um veterano solitário e perturbado, trabalha como taxista nas ruas decadentes de Nova York. Revoltado com a decadência da sociedade, ele mergulha em uma espiral de violência e obsessão por justiça."
    ],
    [
      "titulo" => "Uncharted",
      "imagem" => "Imagens/acao/uncharted.jpg",
      "atores" => "Tom Holland, Mark Wahlberg",
      "diretor" => "Ruben Fleischer",
      "ano" => 2022,
      "classificacao" => "12",
      "sinopse" => "O jovem caçador de tesouros Nathan Drake embarca em uma jornada perigosa para encontrar um tesouro lendário perdido há séculos, enquanto enfrenta traições, enigmas históricos e adversários implacáveis."
    ],
    [
      "titulo" => "Vingança Fatal",
      "imagem" => "Imagens/acao/vingançafatal.webp",
      "atores" => "Gerard Butler, Jamie Foxx",
      "diretor" => "F. Gary Gray",
      "ano" => 2009,
      "classificacao" => "16",
      "sinopse" => "Um homem comum decide se vingar do sistema judicial corrupto depois que os assassinos de sua família escapam da justiça. Suas ações desencadeiam uma série de eventos violentos, levando a cidade ao caos."
    ]
  ],
  "comedia" => [
    [
      "titulo" => "Até que a Sorte nos Separe",
      "imagem" => "Imagens/comedia/atequeasorte.jpg",
      "atores" => "Leandro Hassum, Danielle Winits",
      "diretor" => "Roberto Santucci",
      "ano" => 2012,
      "classificacao" => "12",
      "sinopse" => "Téo, um homem simples e sem sorte, ganha na loteria e vê sua vida mudar drasticamente. Com o dinheiro, ele acredita que vai conquistar tudo o que sempre quis, mas acaba se envolvendo em confusões e problemas que mudam sua visão sobre a vida e o verdadeiro significado de felicidade."
    ],
    [
      "titulo" => "Bad Boys",
      "imagem" => "Imagens/comedia/badboys.jpg",
      "atores" => "Will Smith, Martin Lawrence",
      "diretor" => "Michael Bay",
      "ano" => 1995,
      "classificacao" => "16",
      "sinopse" => "Mike Lowrey e Marcus Burnett são dois policiais de Miami que se enfrentam com bandidos enquanto tentam proteger uma testemunha e resolver um caso de drogas. Com seu estilo irreverente e muitas explosões, os dois protagonistas formam uma dupla explosiva."
    ],
    [
      "titulo" => "As Branquelas",
      "imagem" => "Imagens/comedia/branquelas.webp",
      "atores" => "Shawn Wayans, Marlon Wayans",
      "diretor" => "Keenen Ivory Wayans",
      "ano" => 2004,
      "classificacao" => "12",
      "sinopse" => "Dois agentes do FBI disfarçam-se como duas socialites brancas, depois que as verdadeiras herdeiras de uma grande fortuna são sequestradas. O filme traz uma abordagem cômica e cheia de situações hilárias enquanto eles tentam desvendar o crime sem serem descobertos."
    ],
    [
      "titulo" => "Gente Grande",
      "imagem" => "Imagens/comedia/gentegrande.jpg",
      "atores" => "Adam Sandler, Kevin James",
      "diretor" => "Dennis Dugan",
      "ano" => 2010,
      "classificacao" => "10",
      "sinopse" => "Cinco amigos de infância se reencontram após a morte de seu treinador de basquete. Juntos, passam um fim de semana em uma casa de campo, relembrando os velhos tempos, enfrentando as situações da vida adulta e descobrindo como as amizades de infância podem mudar suas vidas."
    ],
    [
      "titulo" => "Intocáveis",
      "imagem" => "Imagens/comedia/intocaveis.jpg",
      "atores" => "François Cluzet, Omar Sy",
      "diretor" => "Olivier Nakache, Éric Toledano",
      "ano" => 2011,
      "classificacao" => "12",
      "sinopse" => "A história real de um milionário tetraplégico e seu improvável cuidador, um ex-presidiário. A relação deles se transforma em uma amizade forte e divertida, desafiando estereótipos e barreiras sociais, e mostrando o poder da humanidade e da amizade."
    ],
    [
      "titulo" => "O Máskara",
      "imagem" => "Imagens/comedia/mask.jpg",
      "atores" => "Jim Carrey, Cameron Diaz",
      "diretor" => "Chuck Russell",
      "ano" => 1994,
      "classificacao" => "12",
      "sinopse" => "Stanley Ipkiss, um homem tímido e sem sorte, encontra uma máscara mágica que o transforma em um personagem irreconhecível e caótico, com poderes sobre-humanos. Ao se tornar o Máskara, ele mergulha em uma série de confusões hilárias, enquanto tenta lidar com suas novas habilidades e a vida no caos."
    ],
    [
      "titulo" => "Zohan",
      "imagem" => "Imagens/comedia/zohan.webp",
      "atores" => "Adam Sandler, Emmanuelle Chriqui",
      "diretor" => "Dennis Dugan",
      "ano" => 2008,
      "classificacao" => "12",
      "sinopse" => "Zohan Dvir é um agente secreto israelense famoso por suas habilidades de combate. Farto da violência, ele finge sua morte e se muda para Nova York para realizar seu sonho de ser cabeleireiro, onde encontra uma série de novas confusões e situações hilárias."
    ]
  ],

  "fantasia" => [
    [
      "titulo" => "Alice no País das Maravilhas",
      "imagem" => "Imagens/fantasia/alice.jpg",
      "atores" => "Mia Wasikowska, Johnny Depp",
      "diretor" => "Tim Burton",
      "ano" => 2010,
      "classificacao" => "10",
      "sinopse" => "Alice retorna ao País das Maravilhas, onde encontra personagens excêntricos como o Chapeleiro Maluco e a Rainha Vermelha. Ela embarca em uma jornada para restaurar o equilíbrio no reino e confrontar sua própria identidade e destino."
    ],
    [
      "titulo" => "Branca de Neve e o Caçador",
      "imagem" => "Imagens/fantasia/brancadeneve.jpg",
      "atores" => "Kristen Stewart, Chris Hemsworth",
      "diretor" => "Rupert Sanders",
      "ano" => 2012,
      "classificacao" => "12",
      "sinopse" => "Branca de Neve, uma princesa destemida, se une ao caçador, encarregado de matá-la, para derrotar a malvada Rainha Ravena. Juntos, eles enfrentam seres místicos e perigosos enquanto tentam restaurar a paz no reino."
    ],
    [
      "titulo" => "Harry Potter e a Pedra Filosofal",
      "imagem" => "Imagens/fantasia/harrypotter.webp",
      "atores" => "Daniel Radcliffe, Emma Watson",
      "diretor" => "Chris Columbus",
      "ano" => 2001,
      "classificacao" => "10",
      "sinopse" => "Harry Potter, um garoto órfão, descobre que é um bruxo e começa a estudar na Escola de Magia de Hogwarts, onde faz novos amigos e descobre um segredo perigoso relacionado à Pedra Filosofal e a ameaça do Lorde das Trevas."
    ],
    [
      "titulo" => "As Crônicas de Nárnia",
      "imagem" => "Imagens/fantasia/narnia.jpg",
      "atores" => "Georgie Henley, Skandar Keynes",
      "diretor" => "Andrew Adamson",
      "ano" => 2005,
      "classificacao" => "10",
      "sinopse" => "Quatro irmãos encontram um guarda-roupa mágico que os leva a Nárnia, um mundo encantado à beira da guerra. Juntos, eles se tornam heróis, ajudando a salvar o reino das garras da Feiticeira Branca."
    ],
    [
      "titulo" => "O Mágico de Oz",
      "imagem" => "Imagens/fantasia/omagicodeoz.jpg",
      "atores" => "Judy Garland, Frank Morgan",
      "diretor" => "Victor Fleming",
      "ano" => 1939,
      "classificacao" => "Livre",
      "sinopse" => "Dorothy é transportada para a Terra de Oz, onde encontra novos amigos e tenta encontrar uma maneira de voltar para casa, enfrentando a Feiticeira do Oeste e descobrindo o poder de seus próprios desejos."
    ],
    [
      "titulo" => "Peter Pan",
      "imagem" => "Imagens/fantasia/peterpan.jpg",
      "atores" => "Jeremy Sumpter, Jason Isaacs",
      "diretor" => "P.J. Hogan",
      "ano" => 2003,
      "classificacao" => "Livre",
      "sinopse" => "Peter Pan, o garoto que nunca cresce, leva Wendy e seus irmãos para a Terra do Nunca, onde enfrentam o Capitão Gancho e embarcam em uma série de aventuras mágicas e perigosas."
    ],
    [
      "titulo" => "Shrek",
      "imagem" => "Imagens/fantasia/shrek.png",
      "atores" => "Mike Myers, Eddie Murphy",
      "diretor" => "Andrew Adamson, Vicky Jenson",
      "ano" => 2001,
      "classificacao" => "Livre",
      "sinopse" => "Shrek, um ogro que adora a solidão, vê sua vida virar de cabeça para baixo quando uma série de criaturas de contos de fadas é exilada em sua casa. Junto com o burro Donkey, ele parte para resgatar a princesa Fiona e descobrir que há muito mais por trás dos contos de fada."
    ]
  ],
  "romance" => [
    [
      "titulo" => "10 Coisas que Eu Odeio em Você",
      "imagem" => "Imagens/romance/10coisasqueeuodeioemvoce.jpg",
      "atores" => "Heath Ledger, Julia Stiles",
      "diretor" => "Gil Junger",
      "ano" => 1999,
      "classificacao" => "12",
      "sinopse" => "Kat, uma jovem rebelde, não gosta de se relacionar com os rapazes. Mas seu pai tem uma regra: sua irmã mais nova, Bianca, não pode namorar até que Kat se relacione com alguém. Então, um jovem paga um amigo para conquistar Kat, mas acaba se apaixonando por ela de verdade."
    ],
    [
      "titulo" => "500 Dias com Ela",
      "imagem" => "Imagens/romance/500diascomela.webp",
      "atores" => "Joseph Gordon-Levitt, Zooey Deschanel",
      "diretor" => "Marc Webb",
      "ano" => 2009,
      "classificacao" => "12",
      "sinopse" => "Tom Hansen reflete sobre seu relacionamento com Summer Finn, que é uma mulher com uma visão não convencional sobre o amor. O filme segue uma narrativa não linear, explorando os altos e baixos desse romance e as lições aprendidas."
    ],
    [
      "titulo" => "Esposa de Mentirinha",
      "imagem" => "Imagens/romance/esposadementirinha.jpg",
      "atores" => "Adam Sandler, Jennifer Aniston",
      "diretor" => "Dennis Dugan",
      "ano" => 2011,
      "classificacao" => "12",
      "sinopse" => "Danny é um homem divorciado que pede para uma mulher, sua cabeleireira, fingir ser sua esposa em uma mentira para convencer uma jovem a namorá-lo. Quando as coisas começam a complicar, ele se vê preso em um jogo de mentiras e sentimentos reais."
    ],
    [
      "titulo" => "Mamma Mia!",
      "imagem" => "Imagens/romance/mammamia.jpg",
      "atores" => "Meryl Streep, Amanda Seyfried",
      "diretor" => "Phyllida Lloyd",
      "ano" => 2008,
      "classificacao" => "10",
      "sinopse" => "Sophie, uma jovem que vai se casar, tenta descobrir quem é seu verdadeiro pai, convidando três homens diferentes para o casamento. Enquanto isso, a história é recheada de músicas e danças contagiantes."
    ],
    [
      "titulo" => "Minha Culpa",
      "imagem" => "Imagens/romance/minhaculpa.jpg",
      "atores" => "Nicole Wallace, Gabriel Guevara",
      "diretor" => "Domingo González",
      "ano" => 2023,
      "classificacao" => "16",
      "sinopse" => "Após um erro do passado, uma jovem enfrenta um amor proibido, enquanto lida com suas próprias culpas e tenta construir um futuro ao lado de quem ama, apesar das dificuldades e obstáculos."
    ],
    [
      "titulo" => "Um Lugar Chamado Notting Hill",
      "imagem" => "Imagens/romance/Notting_Hill.jpg",
      "atores" => "Hugh Grant, Julia Roberts",
      "diretor" => "Roger Michell",
      "ano" => 1999,
      "classificacao" => "12",
      "sinopse" => "William Thacker, um simples dono de livraria, conhece uma famosa atriz de Hollywood, Anna Scott. Apesar da diferença de estilos de vida, os dois começam a se apaixonar, mas têm que enfrentar as dificuldades que surgem devido à fama de Anna."
    ],
    [
      "titulo" => "Romeu e Julieta",
      "imagem" => "Imagens/romance/romeuejulieta.jpg",
      "atores" => "Leonardo DiCaprio, Claire Danes",
      "diretor" => "Baz Luhrmann",
      "ano" => 1996,
      "classificacao" => "14",
      "sinopse" => "Uma versão moderna e estilizada do clássico de Shakespeare, onde dois jovens apaixonados, pertencentes a famílias rivais, tentam lutar contra as barreiras do amor e da tradição."
    ],
    [
      "titulo" => "Titanic",
      "imagem" => "Imagens/romance/Titanic_poster.jpg",
      "atores" => "Leonardo DiCaprio, Kate Winslet",
      "diretor" => "James Cameron",
      "ano" => 1997,
      "classificacao" => "12",
      "sinopse" => "Jack e Rose, dois passageiros de classes sociais diferentes, se apaixonam a bordo do luxuoso navio Titanic. Enquanto o romance entre eles cresce, o navio colide com um iceberg, trazendo uma luta desesperada pela sobrevivência. O filme se tornou um épico romântico e dramático, com cenas inesquecíveis e uma história que marcou gerações."
    ]
  ],
  "terror" => [
    [
      "titulo" => "1922",
      "imagem" => "Imagens/terror/1922_-_Filme_de_2017.png",
      "atores" => "Thomas Jane, Molly Parker",
      "diretor" => "Zak Hilditch",
      "ano" => 2017,
      "classificacao" => "16",
      "sinopse" => "Em 1922, um homem confessa, em um depoimento escrito, que assassinou sua esposa para poder ficar com a propriedade da fazenda onde viviam, mas as consequências e assombrações decorrentes de sua escolha transformam sua vida em um pesadelo aterrorizante."
    ],
    [
      "titulo" => "A Entidade",
      "imagem" => "Imagens/terror/aentidade.jpg",
      "atores" => "Ethan Hawke, Juliet Rylance",
      "diretor" => "Scott Derrickson",
      "ano" => 2012,
      "classificacao" => "16",
      "sinopse" => "Um escritor encontra uma caixa de vídeos caseiros em sua nova casa e começa a investigar uma série de assassinatos brutais. No entanto, ele logo percebe que está sendo observado por uma força sobrenatural e sombria."
    ],
    [
      "titulo" => "Atividade Paranormal",
      "imagem" => "Imagens/terror/atividadeparanormal.webp",
      "atores" => "Katie Featherston, Micah Sloat",
      "diretor" => "Oren Peli",
      "ano" => 2007,
      "classificacao" => "16",
      "sinopse" => "Um casal jovem começa a notar eventos estranhos em sua casa e decide documentar tudo com uma câmera. À medida que os fenômenos paranormais se intensificam, eles se tornam cada vez mais aterrorizados."
    ],
    [
      "titulo" => "A Hora do Pesadelo",
      "imagem" => "Imagens/terror/horadopesadelo.webp",
      "atores" => "Robert Englund, Heather Langenkamp",
      "diretor" => "Wes Craven",
      "ano" => 1984,
      "classificacao" => "18",
      "sinopse" => "Freddy Krueger, um assassino psicótico que foi queimado até a morte, retorna dos mortos e invade os sonhos de seus jovens inimigos para matá-los. O pesadelo torna-se realidade para quem tenta dormir."
    ],
    [
      "titulo" => "It: A Coisa",
      "imagem" => "Imagens/terror/itacoisa.webp",
      "atores" => "Bill Skarsgård, Jaeden Martell",
      "diretor" => "Andy Muschietti",
      "ano" => 2017,
      "classificacao" => "16",
      "sinopse" => "Um grupo de crianças em uma pequena cidade é aterrorizado por um ser maligno que assume a forma de um palhaço chamado Pennywise. À medida que eles tentam entender o que está acontecendo, enfrentam seus maiores medos."
    ],
    [
      "titulo" => "Pânico 4",
      "imagem" => "Imagens/terror/panico4.jpg",
      "atores" => "Neve Campbell, Courteney Cox",
      "diretor" => "Wes Craven",
      "ano" => 2011,
      "classificacao" => "16",
      "sinopse" => "Sidney Prescott retorna para sua cidade natal, onde um novo assassino começa a imitar os crimes do passado, causando pânico entre os sobreviventes da série de assassinatos anteriores. O mistério e a tensão se intensificam à medida que todos se tornam suspeitos."
    ],
    [
      "titulo" => "Psicopata Americano",
      "imagem" => "Imagens/terror/quadradofilme.jpg",
      "atores" => "Christian Bale, Jared Leto",
      "diretor" => "Mary Harron",
      "ano" => 2000,
      "classificacao" => "16",
      "sinopse" => "Patrick Bateman, um banqueiro de Wall Street, leva uma vida dupla como assassino em série. Sua obsessão por status social e violência atinge limites extremos, gerando um caos psicológico."
    ]
  ]
];

   
    
    ?>


<div class="container text-white">
            <div class="row g-3 row-cols-5">
                <?php
            $generos = ['Ação', 'Comédia', 'Fantasia', 'Romance', 'Terror'];
            $filmesGeneros = [];

            $indice = 0;
            foreach ($filmes as $genero => $lista) {
              $filmesGeneros[$indice] = $lista;
              $indice++;
            }

            for ($i = 0; $i < count($filmesGeneros); $i++) {
              $filmesGenero = $filmesGeneros[$i];
              $nomeGenero = $generos[$i];
              $totalFilmes = count($filmesGenero);

              for ($j = 0; $j < $totalFilmes; $j++) {
                $titulo = $filmesGenero[$j]['titulo'];
                $imagem = $filmesGenero[$j]['imagem'];
                $sinopse = $filmesGenero[$j]['sinopse'];
                $idModal = 'modal-' . $i . '-' . $j;  
          ?>
                <div class="col">
                    <div class="card h-100 bg-dark text-white border-0">
                        <img src="<?= $imagem ?>" class="card-img-top" alt="<?= $titulo ?>"
                            onerror="this.src='https://via.placeholder.com/300x180?text=Imagem+Indisponível'">
                        <div class="card-body">
                            <h5 class="card-title"><?= $titulo ?></h5>
                            <p class="card-text text-capitalize">Gênero: <?= $nomeGenero ?></p>
                            <button type="button" class="btn btn-dark bg-black" data-bs-toggle="modal"
                                data-bs-target="#<?= $idModal ?>">
                                Saber mais
                            </button>

                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="<?= $idModal ?>" tabindex="-1" aria-labelledby="<?= $idModal ?>Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content bg-dark"> 
                            <div class="modal-header border-0">
                              <h1 class="modal-title fs-5" id="<?= $idModal ?>Label"><?= $titulo ?></h1>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-white">
                                <img src="<?= $imagem ?>" class="modal-img w-100 mb-3" alt="<?= htmlspecialchars($titulo) ?>" />
                                <h3 class="text-center"><?= $titulo ?></h3>
                                <p>Sinopse: <?= $sinopse ?></p>
                                <p>Atores: <?= $filmesGenero[$j]['atores'] ?></p>
                                <p>Diretor: <?= $filmesGenero[$j]['diretor'] ?></p>
                                <p>Ano: <?= $filmesGenero[$j]['ano'] ?></p>
                                <p>Classificação: <?= $filmesGenero[$j]['classificacao'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
            </div>
        </div>

  </main>

  <footer class="footer text-white py-5 mt-5">
        <div class="container">
          <div class="row">

            <div class="col-md-4 mb-4">
              <h5 class="mb-3">Sobre a CLTV</h5>
              <p class="small">Plataforma de streaming com os melhores filmes e séries para você aproveitar onde quiser, a qualquer hora e em qualquer lugar.</p>
            </div>

            <div class="col-md-4 mb-4">
              <h5 class="mb-3">Links Úteis</h5>
              <ul class="list-unstyled">
                <li><a href="index.php" class="footer-link">Home</a></li>
                <li><a href="filmes.php" class="footer-link">Filmes</a></li>
                <li><a href="series.php" class="footer-link">Séries</a></li>
                
              </ul>
            </div>

            <div class="col-md-4 mb-4">
              <h5 class="mb-3">Redes Sociais</h5>
              <a href="#" class="text-white me-3" aria-label="Facebook"><i class="bi bi-facebook fs-3"></i></a>
              <a href="#" class="text-white me-3" aria-label="Twitter"><i class="bi bi-twitter fs-3"></i></a>
              <a href="#" class="text-white me-3" aria-label="Instagram"><i class="bi bi-instagram fs-3"></i></a>
              <a href="#" class="text-white" aria-label="YouTube"><i class="bi bi-youtube fs-3"></i></a>
            </div>

          </div>

          <hr class="border-secondary" />

          <div class="text-center small">
            &copy; <?= date('Y'); ?> CLTV. Todos os direitos reservados.
          </div>
        </div>
    </footer>

</body>
</html>
