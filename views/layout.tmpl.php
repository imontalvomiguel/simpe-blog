<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/furtive.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/stylesheet.css" />
  </head>
  <body class="grd">
    <header class="grd-row py1">
      <div class="grd-row-col-6">
        <h1>My blog</h1>
      </div>
    </header>
    <section class="grd-row">
      <div class="grd-row-col-6">
        <?= $content; ?>
      </div>
    </section>
    <footer class="grd-row py1">
      <div class="grd-row-col-6">
        <p>© Company <?= date('Y'); ?></p>
      </div>
    </footer>
  </body>
</html>
