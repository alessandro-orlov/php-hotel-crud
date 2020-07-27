<?php include __DIR__ . "/server_edit.php" ?>

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
      <main>
        <h2>Modifica Stanza</h2>
        <form action="update.php" method="POST">
          <input type="hidden" name="roomId" value="<?php echo $room['id'] ?> ">
          <label>Numero Stanza: </label>
          <input type="text" name="roomNumber" value="<?php echo $room['room_number']; ?>">
          <br>
          <label>Piano: </label>
          <input type="text" name="roomFloor" value="<?php echo $room['floor']; ?>">
          <br>
          <label>Letti: </label>
          <input type="text" name="roomBeds" value="<?php echo $room['beds']; ?>">
          <div class="edit-buttons">
            <a href="<?php echo $base_url ?>">torna indietro</a>
            <input class="edit" type="submit" name="" value="salva modifiche">
          </div>
        </form>
      </main>
    </div>
  </body>
</html>
