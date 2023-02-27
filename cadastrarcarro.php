<h1></h1>

<form method="POST" action="salvarcarro.php">

  <label for="marca">Marca:</label><br>
  <input type="text" id="marca" name="marca"><br>
  <label for="modelo">Modelo:</label><br>
  <input type="text" id="modelo" name="modelo"><br>
  <label for="cor">Cor:</label><br>
  <input type="text" id="cor" name="cor"><br>
  <label for="ano">Ano:</label><br>
  <input type="text" id="ano" name="ano"><br>

    <select name="tipo">
        <option>Off-road</option>
        <option>Corrida</option>
        <option>Cidade</option>
        <option>Lazer</option>
    </select>
  
  <input type="submit" value="Salvar" name="salvar">

</form> 