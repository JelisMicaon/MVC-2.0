<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo BASE_URL.'assets'.D_S.'images'.D_S.'favicon.ico'; ?>" rel="icon" type="image/ico" />

    <title><?php echo TITLE_WEB; ?></title>

    <!-- Tailwindcss -->
    <link href="<?php echo BASE_URL.'assets'.D_S.'css'.D_S.'utilities.min.css'; ?>" rel="stylesheet">
    <!-- Bootstrap 4.3 -->
    <link href="<?php echo BASE_URL.'assets'.D_S.'css'.D_S.'bootstrap.min.css'; ?>" rel="stylesheet">
    <!-- Ionicons 2.0.1 -->
    <link href="<?php echo BASE_URL.'assets'.D_S.'more'.D_S.'fontawesome'.D_S.'css'.D_S.'all.min.css'; ?>" rel="stylesheet">
    <!-- Custom Style -->
    <link href="<?php echo BASE_URL.'assets'.D_S.'css'.D_S.'style.css'; ?>?v=<?php echo date ("Y-m-d H:i:s", filemtime('assets'.D_S.'css'.D_S.'style.css')); ?>" rel="stylesheet">
  </head>

  <body>
    <header class="bg-dark shadow border-bottom border-light d-flex flex-column jutify-content-center align-items-center">
      <?php
        // CARREGA O ARQUIVO ONDE POSSUI A BARRA SUPERIOR.
        $this->loadViewInTemplate('topbar', $viewData);
        // CARREGA O ARQUIVO ONDE POSSUI OS MENUS.
        $this->loadViewInTemplate('menu', $viewData);
      ?>
    </header>
    <carousel>
      <?php
        // CARREGA O ARQUIVO ONDE POSSUI OS SLIDES.
        // $this->loadViewInTemplate('carousel', $viewData);
      ?>
    </carousel>
    <main class="mt-3 p-3 container bg-white shadow border-bottom border-light">
      <?php
        if ($viewFile) {
          $this->loadView($viewName, $viewData, $viewFile);
        } else {
          $this->loadViewInTemplate($viewName, $viewData);
        }
      ?>
    </main>
    <footer class="mt-3">
      <?php
        // CARREGA O ARQUIVO ONDE POSSUI O FOOTER.
        $this->loadViewInTemplate('footer', $viewData);
      ?>
    </footer>
    <script type="text/javascript">
      var BASE_URL = '<?php echo BASE_URL; ?>';
      var BASE_URL_ORIGIN = '<?php echo BASE_URL_ORIGIN; ?>';
      var D_S = '<?php echo D_S; ?>';
    </script>
    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo BASE_URL.'assets'.D_S.'js'.D_S.'jquery-3.4.1.min.js'; ?>"></script>
    <!-- JQuery Mask Plugin -->
    <script src="<?php echo BASE_URL.'assets'.D_S.'js'.D_S.'jquery.mask.js'; ?>"></script>
    <!-- Bootstrap and Popper-->
    <script type="text/javascript" src="<?php echo BASE_URL.'assets'.D_S.'js'.D_S.'bootstrap.bundle.min.js'; ?>"></script>

    <!-- Custom JS -->
    <script src="<?php echo BASE_URL.'assets'.D_S.'js'.D_S.'script.js'; ?>?v=<?php echo date ("Y-m-d H:i:s", filemtime('assets'.D_S.'js'.D_S.'script.js')); ?>"></script>
  </body>
</html>