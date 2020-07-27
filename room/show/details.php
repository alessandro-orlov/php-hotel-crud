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
        <h2>Dettagli Stanza</h2>
        <ul>
          <li>Nomero stazna: <?php echo $room['room_number']; ?> </li>
          <li>Piano: <?php echo $room['floor']; ?> </li>
          <li>Letti: <?php echo $room['beds']; ?> </li>
        </ul>
        <a href="<?php echo $base_url ?>">torna indietro</a>
      </main>
      <!-- End main -->
    </div>
  </body>
</html>
