<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <title>CLTV</title>
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
      <h1 class="text-white">| DESTAQUES</h1>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgs/coracoesdeferro.jpg " class="d-block w-100 imgcar" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="imgs/clubedaluta.webp" class="d-block w-100 imgcar" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="imgs/starwars.jpg" class="d-block w-100 imgcar" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <h1 class="text-white">| LANÇAMENTOS</h1>

      <?php
        $lancamentos = [
          [
            "imagem" => "imgs/homem.webp",
            "link" => "https://www.google.com/search?q=Homem+com+H"
          ],
          [
            "imagem" => "imgs/6a9edfd55ce28ca6df541b983c2d9d25.jpg",
            "link" => "https://www.google.com/search?q=Karate+Kid%3A+Lendas"
          ],
          [
            "imagem" => "imgs/mine.jpg",
            "link" => "https://www.google.com/search?q=Minecraft+Filme"
          ],
          [
            "imagem" => "imgs/1d6f98938e13ae86e4178850a709b9f3.webp",
            "link" => "https://www.google.com/search?q=Thunderbolts"
          ],
          [
            "imagem" => "imgs/pecadores.jpg",
            "link" => "https://www.google.com/search?q=Pecadores"
          ]
        ];
      ?>

      <div class="container text-white">
        <div class="row g-3 row-cols-5">
          <?php
            for ($i = 0; $i < count($lancamentos); $i++) {
          ?>
            <div class="col">
              <div class="card border-0 h-100">
                <a href="<?= $lancamentos[$i]['link'] ?>" target="_blank">
                  <img src="<?= $lancamentos[$i]['imagem'] ?>" class="card-img-top" alt="Lançamento <?= $i + 1 ?>">
                </a>
              </div>
            </div>
          <?php
            }
          ?>
        </div>
      </div>

      <h1 class="text-white">| OSCAR</h1>
      <div id="carouselOscar" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
      
          <?php
          $oscar = [
            [
              "titulo" => "Parasita (2019)",
              "imagem" => "imgs/oscar/parasitas.jpg",
              "link" => "https://www.google.com/search?q=parasita+2019+oscar",
            ],
            [
              "titulo" => "Green Book: O Guia (2018)",
              "imagem" => "imgs/oscar/greenbook.webp",
              "link" => "https://www.google.com/search?q=green+book+2018+oscar",
            ],
            [
              "titulo" => "Moonlight: Sob a Luz do Luar (2016)",
              "imagem" => "imgs/oscar/Moonlight.webp",
              "link" => "https://www.google.com/search?q=moonlight+2016+oscar",
            ],
            [
              "titulo" => "Spotlight: Segredos Revelados (2015)",
              "imagem" => "imgs/oscar/Spotlight.jpg",
              "link" => "https://www.google.com/search?q=spotlight+2015+oscar",
            ],
            [
              "titulo" => "12 Anos de Escravidão (2013)",
              "imagem" => "imgs/oscar/12anos.webp",
              "link" => "https://www.google.com/search?q=12+anos+de+escravidão+2013+oscar",
            ],
            [
              "titulo" => "Titanic (1997)",
              "imagem" => "imgs/oscar/Titanic.jpg",
              "link" => "https://www.google.com/search?q=titanic+1997+oscar",
            ],
            [
              "titulo" => "Forrest Gump (1994)",
              "imagem" => "imgs/oscar/ForrestGumpPoster.jpg",
              "link" => "https://www.google.com/search?q=forrest+gump+1994+oscar",
            ]
          ];

          $cardsnoslide = 5;
          //$total = count($oscar);
          
          ?>

        </div>
      </div>

      <div class="container text-white">
        <div class="row g-3 row-cols-5">
          <?php
            for ($i = 0; $i < count($oscar); $i++) {
              
          ?>
            <div class="col">
              <div class="card border-0 h-100">
                <a href="<?= $oscar[$i]['link'] ?>" target="_blank">
                  <img src="<?= $oscar[$i]['imagem'] ?>" class="card-img-top" alt="<?= $oscar[$i]['titulo'] ?>">
                </a>
              </div>
            </div>
          <?php
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