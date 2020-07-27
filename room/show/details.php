<?php include __DIR__ . "/server_show.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include __DIR__ . "/../../page_partials/_head.php" ?>
  <body>
   <div class="wrapper">
      <!-- Begin header -->
      <header>
        <h1>Hotel da incubo</h1>
      </header>
      <!-- End Header -->

      <!-- Begin main -->
      <main>
        <h2>Dettagli Stanza: </h2>
        <ul>
          <?php foreach ($room_detail as $key) { ?>
            <li>Nomero stazna: <?php echo $key['room_number']; ?> </li>
            <li>Piano: <?php echo $key['floor']; ?> </li>
            <li>Letti: <?php echo $key['beds']; ?> </li>
          <?php } ?>
        </ul>
        <a href="<?php echo $base_url ?>">torna indietro</a>
      </main>
      <!-- End main -->
    </div>
  </body>
</html>
