<!DOCTYPE html>
<html lang="en">

<head>
  <title>GEGEN RECHTS</title>
  <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://use.typekit.net/nml7lcx.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
</head>

<body>
  <?php include ('./components/header.php'); ?>

  <!-- Intro -->
  <?php include ('./components/intro.php'); ?>

  <!-- Hero Image -->
  <?php include ('./components/hero-image-event.php'); ?>

  <!-- Description -->
  <?php include ('./components/description.php'); ?>

  <!-- Gallery -->
  <?php include ('./components/gallery.php'); ?>

  <!-- Social Media & Buy -->
  <section id="more">
    <?php include ('./components/instructions.php'); ?>
    <?php include ('./components/social-media.php'); ?>
    <?php include ('./components/demo-kit.php'); ?>
  </section>

  <!-- Footer -->
  <?php include ('./components/footer.php'); ?>

  <!-- Scripts -->
  <script src="main.js"></script>
</body>

</html>