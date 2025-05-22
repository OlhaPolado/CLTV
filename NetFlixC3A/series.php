<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
        <title>CLTV - Séries</title>
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
$series = [
    'AÇÃO' => [
        [
            'titulo' => 'Cobra Kai',
            'imagem' => 'séries/ação/cobra-kai.jpg'
        ],
        [
            'titulo' => 'Justiceiro',
            'imagem' => 'séries/ação/justiceiro.webp'
        ],
        [
            'titulo' => 'La Casa De Papel',
            'imagem' => 'séries/ação/la-casa-de-papel.webp'
        ],
        [
            'titulo' => 'Smallville',
            'imagem' => 'séries/ação/smallville.jpg'
        ],
        [
            'titulo' => 'The Boys',
            'imagem' => 'séries/ação/the-boys.jpg'
        ]
    ],
    'COMÉDIA' => [
        [
            'titulo' => 'Chaves',
            'imagem' => 'séries/comedia/chaves.jpg'
        ],
        [
            'titulo' => 'Friends',
            'imagem' => 'séries/comedia/friends.jpg'
        ],
        [
            'titulo' => 'Simpsons',
            'imagem' => 'séries/comedia/simpsons.webp'
        ],
        [
            'titulo' => 'The Office',
            'imagem' => 'séries/comedia/the-office.webp'
        ],
        [
            'titulo' => 'Todo Mundo Odeia O Chris',
            'imagem' => 'séries/comedia/todo-mundo-odeia-o-chris.jpg'
        ]
    ],
    'ROMANCE' => [
        [
            'titulo' => 'Esqueça-me se puder',
            'imagem' => 'séries/romance/esqueca-me-se-puder.webp'
        ],
        [
            'titulo' => 'Brave the world',
            'imagem' => 'séries/romance/brave-the-world.webp'
        ],
        [
            'titulo' => 'Heartstopper',
            'imagem' => 'séries\romance\heartstopper.jpg'

        ]
    ],
    'TERROR' => [
        [
            'titulo' => 'A Maldição Da Residência Hill',
            'imagem' => 'séries/terror/the-haunting-of-hill-house.jpg'
        ],
        [
            'titulo' => 'Stranger Things',
            'imagem' => 'séries/terror/stranger-things.jpg'
        ],
        [
            'titulo' => 'The Walking Dead',
            'imagem' => 'séries/terror/the-walking-dead.jpg'
        ]
    ],
    'FANTASIA' => [
        [
            'titulo' => 'Avatar',
            'imagem' => 'séries/fantasia/avatar.webp'
        ],
        [
            'titulo' => 'Flash',
            'imagem' => 'séries/fantasia/flash.jpg'
        ],
        [
            'titulo' => 'Got',
            'imagem' => 'séries/fantasia/got.jpg'
        ],
        [
            'titulo' => 'Grimm',
            'imagem' => 'séries/fantasia/grimm.jpg'
        ]
      ]
    ];

    $generoSelecionado = isset($_GET['genero']) ? strtoupper($_GET['genero']) : 'AÇÃO';

      //if ($_GET['genero']) {
    //$generoSelecionado = $_GET['genero'];
    //} else {
    //$generoSelecionado = 'AÇÃO';
    //}


      $seriesFiltrados = $series[$generoSelecionado];

      
      $total = count($seriesFiltrados);
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
                    $titulo = $seriesFiltrados[$j]['titulo'];
                    $imagem = $seriesFiltrados[$j]['imagem'];
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
      <h1>| TODOS</h1>

      <?php

$seriesfinal = [
  'Ação' => [
      [
          'titulo' => 'Cobra Kai',
          'imagem' => 'séries/ação/cobra-kai.jpg',
          'atores' => 'Atores Exemplo 1, Atores Exemplo 2',
          'diretor' => 'Diretor Exemplo',
          'classificacao' => '14',
          'episodios' => 20,
          'temporadas' => 2
      ],
      [
          'titulo' => 'Justiceiro',
          'imagem' => 'séries/ação/justiceiro.webp',
          'atores' => 'Atores Exemplo 1, Atores Exemplo 2',
          'diretor' => 'Diretor Exemplo',
          'classificacao' => '16',
          'episodios' => 26,
          'temporadas' => 2
      ],
      [
          'titulo' => 'La Casa De Papel',
          'imagem' => 'séries/ação/la-casa-de-papel.webp',
          'atores' => 'Atores Exemplo 1, Atores Exemplo 2',
          'diretor' => 'Diretor Exemplo',
          'classificacao' => '18',
          'episodios' => 40,
          'temporadas' => 5
      ],
      [
          'titulo' => 'Smallville',
          'imagem' => 'séries/ação/smallville.jpg',
          'atores' => 'Atores Exemplo 1, Atores Exemplo 2',
          'diretor' => 'Diretor Exemplo',
          'classificacao' => '12',
          'episodios' => 218,
          'temporadas' => 10
      ],
      [
          'titulo' => 'The Boys',
          'imagem' => 'séries/ação/the-boys.jpg',
          'atores' => 'Atores Exemplo 1, Atores Exemplo 2',
          'diretor' => 'Diretor Exemplo',
          'classificacao' => '18',
          'episodios' => 24,
          'temporadas' => 3
      ]
  ],
  'Comédia' => [
      [
          'titulo' => 'Chaves',
          'imagem' => 'séries/comedia/chaves.jpg',
          'atores' => 'Roberto Bolaños, Carlos Villagrán',
          'diretor' => 'Roberto Bolaños',
          'classificacao' => 'Livre',
          'episodios' => 290,
          'temporadas' => 8
      ],
      [
          'titulo' => 'Friends',
          'imagem' => 'séries/comedia/friends.jpg',
          'atores' => 'Jennifer Aniston, Courteney Cox',
          'diretor' => 'David Crane',
          'classificacao' => '12',
          'episodios' => 236,
          'temporadas' => 10
      ],
      [
          'titulo' => 'Simpsons',
          'imagem' => 'séries/comedia/simpsons.webp',
          'atores' => 'Dan Castellaneta, Nancy Cartwright',
          'diretor' => 'Matt Groening',
          'classificacao' => '12',
          'episodios' => 750,
          'temporadas' => 35
      ],
      [
          'titulo' => 'The Office',
          'imagem' => 'séries/comedia/the-office.webp',
          'atores' => 'Steve Carell, Rainn Wilson',
          'diretor' => 'Greg Daniels',
          'classificacao' => '14',
          'episodios' => 201,
          'temporadas' => 9
      ],
      [
          'titulo' => 'Todo Mundo Odeia O Chris',
          'imagem' => 'séries/comedia/todo-mundo-odeia-o-chris.jpg',
          'atores' => 'Tyler James Williams, Terry Crews',
          'diretor' => 'Chris Rock',
          'classificacao' => '12',
          'episodios' => 88,
          'temporadas' => 4
      ]
  ],
  'Fantasia' => [
    [
      'titulo' => 'Arrow',
      'imagem' => 'séries/fantasia/arrow.jpg',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '14',
      'episodios' => 100,
      'temporadas' => 8
    ],
    [
      'titulo' => 'Avatar',
      'imagem' => 'séries/fantasia/avatar.webp',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => 'Livre',
      'episodios' => 61,
      'temporadas' => 3
    ],
    [
      'titulo' => 'Flash',
      'imagem' => 'séries/fantasia/flash.jpg',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '12',
      'episodios' => 184,
      'temporadas' => 9
    ],
    [
      'titulo' => 'GOT',
      'imagem' => 'séries/fantasia/got.jpg',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '18',
      'episodios' => 73,
      'temporadas' => 8
    ],
    [
      'titulo' => 'Grimm',
      'imagem' => 'séries/fantasia/grimm.jpg',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '14',
      'episodios' => 123,
      'temporadas' => 6
    ]
  ],
  'Romance' => [
    [
      'titulo' => 'Brave the World',
      'imagem' => 'séries/romance/brave-the-world.webp',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '16',
      'episodios' => 10,
      'temporadas' => 1
    ],
    [
      'titulo' => 'Esqueça-me Se Puder',
      'imagem' => 'séries/romance/esqueca-me-se-puder.webp',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '14',
      'episodios' => 12,
      'temporadas' => 1
    ],
    [
      'titulo' => 'Heartstopper',
      'imagem' => 'séries/romance/heartstopper.jpg',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '12',
      'episodios' => 16,
      'temporadas' => 2
    ],
    [
      'titulo' => 'Nobody Wants This',
      'imagem' => 'séries/romance/nobody-wants-this.webp',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '16',
      'episodios' => 8,
      'temporadas' => 1
    ],
    [
      'titulo' => 'Virgin River',
      'imagem' => 'séries/romance/virgin-river.jpg',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '14',
      'episodios' => 50,
      'temporadas' => 5
    ]
  ],
  'Terror' => [
    [
      'titulo' => 'AHS: Murder House',
      'imagem' => 'séries/terror/AHS_Muder_House_poster.jpg',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '18',
      'episodios' => 12,
      'temporadas' => 1
    ],
    [
      'titulo' => 'Supernatural',
      'imagem' => 'séries/terror/supernatural.webp',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '16',
      'episodios' => 327,
      'temporadas' => 15
    ],
    [
      'titulo' => 'The Haunting of Hill House',
      'imagem' => 'séries/terror/the-haunting-of-hill-house.jpg',
      'atores' => 'Atores Exemplo',
      'diretor' => 'Diretor Exemplo',
      'classificacao' => '16',
      'episodios' => 10,
      'temporadas' => 1
    ]
  ]

];


      ?>

      <div class="row row-cols-1 row-cols-md-3 g-4">
<?php
$modalId = 0;
foreach ($seriesfinal as $genero => $lista) {
    foreach ($lista as $serie) {
        $modalId++; // ID único para cada modal
        ?>
        <div class="col">
            <div class="card h-100 bg-dark text-white border-0">
                <img src="<?= $serie['imagem'] ?>" class="card-img-top" alt="<?= $serie['titulo'] ?>" data-bs-toggle="modal" data-bs-target="#modal<?= $modalId ?>" style="cursor:pointer;" onerror="this.src='https://via.placeholder.com/300x180?text=Imagem+Indisponível'">
                <div class="card-body">
                    <h5 class="card-title"><?= $serie['titulo'] ?></h5>
                    <p class="card-text"><strong>Gênero:</strong> <?= $genero ?></p>
                    <button type="button" class="btn btn-dark bg-black" data-bs-toggle="modal"
                    data-bs-target="#modal<?= $modalId ?>">
                      Saber mais
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal<?= $modalId ?>" tabindex="-1" aria-labelledby="modalLabel<?= $modalId ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-dark">
                    <div class="modal-header border-0">
                              <h1 class="modal-title fs-5" id="modal<?= $modalId ?>Label"><?= $serie['titulo'] ?></h1>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                    <div class="modal-body text-white">
                        <img src="<?= $serie['imagem'] ?>" class="img-fluid modal-img w-100 mb-3" alt="<?= $serie['titulo'] ?>" onerror="this.src='https://via.placeholder.com/600x300?text=Imagem+Indisponível'">
                        <p>Atores: <?= $serie['atores'] ?></p>
                        <p>Diretor: <?= $serie['diretor'] ?></p>
                        <p>Classificação: <?= $serie['classificacao'] ?></p>
                        <p>Episódios: <?= $serie['episodios'] ?></p>
                        <p>Temporadas: <?= $serie['temporadas'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
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