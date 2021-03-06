<?php include __DIR__ . "/server.php"; ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
  <?php include __DIR__ . "/page_partials/_head.php"; ?>
   <body>
    <div class="wrapper">
      <!-- Begin header -->
      <header>
        <h1>Hotel da incubo</h1>
      </header>
      <!-- End Header -->

      <!-- Begin main -->
      <main>
        <!-- Begin room list table -->
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>N Stanza</th>
              <th>Piano</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($rooms as $room) { ?>
              <tr>
                <td> <?php echo $room['id']; ?> </td>
                <td> <?php echo $room["room_number"]; ?> </td>
                <td> <?php echo $room["floor"]; ?> </td>
                <td> <a href="<?php echo $base_url;?>/room/show/details.php?id=<?php echo $room['id'];?>">View</a> </td>
                <td> <a href="<?php echo $base_url;?>/room/edit/edit_page.php?id=<?php echo $room['id'];?>">Edit</a> </td>
                <td>
                  <form action="<?php echo $base_url;?>/room/delete/delete_page.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $room['id'];?>">
                    <input class="delete" type="submit" value="Delete">
                  </form>
                </td>
              </tr>
            <?php }; ?>

          </tbody>
        </table>
        <!-- End room list table -->
       </main>
       <!-- End main -->
     </div>
   </body>
 </html>
