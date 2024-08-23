<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require "class.php";  ?>

  <main>

    <h1>PRODUCTS</h1>

    <br>

    <form class="products" action="actions.php" method="post">

      <label for="name">Products' name</label>
      <input type="text" name="name" id="name-products" placeholder="Enter the products' name" required>

      <br>

      <label for="price">Price</label>
      <input type="text" name="price" id="price-products" placeholder="Enter the price" required>

      <br>

      <label for="categoria">Categoria</label>
      <?php
        $categoriaSele=new Categoria;
        $categoriaSele->mostrarselect();
        ?>

      <br>

      <input type="hidden" name="hidden" value="1">

      <br>

      <button type="submit">Enter</button>

    </form>

  </main>

  <script>

    //LLAMADA DE CHAT BOT

    //<iframe src="https://chat.botsheets.com/chat/66c8e944d79d44aa53478755" frameborder="0" width="100%" height="50%"></iframe>

  </script>
    
</body>
</html>