<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Produk</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <form action="action.php" method="GET">
      <h1>Input Data Produk</h1>
      <div class="container">
        <label class="product">ID Produk : <input type="text" name="id" placeholder="Inputkan ID Produk" required /></label>
        <label class="product">Nama Produk : <input type="text" name="name" placeholder="Inputkan Nama Produk" required /></label>
        <button class="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
