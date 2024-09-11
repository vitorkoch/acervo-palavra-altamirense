<?php
require "../vendor/autoload.php";

$meta = [
    "title" => "Acervo Paraense",
    "description" => "",
];
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= $meta["description"] ?>">
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>

  <script src="/assets/scripts/home.mjs" defer type="module"></script>
  <title>
    <?= $meta["title"] ?>
  </title>
  <link rel="stylesheet" href="/assets/styles/home.css" />
</head>

<body>
  <?php require_once "partials/navbar.php"; ?>

  <header>
    <h1>Acervo da Palavra Altamirense</h1>
  </header>

  <main>
    <?php require_once "partials/news-carousel.php"; ?>
  </main>

  <?php require_once "partials/footer.php"; ?>
</body>

</html>