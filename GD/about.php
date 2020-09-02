<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
            crossorigin="anonymous">
        <title>PHP</title>
    </head>
    <body>
      <?php require 'blocks/header.php'; ?>
      <div class="container mt-5">
      <h3>Contacts</h3>
      <form action="check.php" method="POST">
          <input type="email" name="email" placeholder="Email" class="form-control"><br>
          <textarea name="message" class="form-control" placeholder="Enter"></textarea><br>
          <button type="submit" name="send" class="btn btn-success">SEND</button>
      </form>
      </div>
      <?php require 'blocks/footer.php'; ?>
    </body>
</html>
