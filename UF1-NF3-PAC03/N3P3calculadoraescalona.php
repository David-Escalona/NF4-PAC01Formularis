<?php
echo <<<ENDHTML
  <div>
    <br>
    <form method="post" action="N3P3procesadatosescalona.php">
      <label for="num1">Número 1:</label>
      <input type="text" name="num1" id="num1" />
      <br>
      <label for="num2">Número 2:</label>
      <input type="text" name="num2" id="num2" />
      <br>
      <label for="num3">Número 3:</label>
      <input type="text" name="num3" id="num3" />
      <br>
      <label for="operacion">Operación:</label>
      <select name="operacion" id="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
      </select><br>

      <input type="submit" value="Realizar Operación">
    </form>
  </div>
</body>
</html>
ENDHTML;
?>


