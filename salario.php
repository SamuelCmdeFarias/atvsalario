<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Tabuada</title>
</head>
<body>
<form>
      <label for="salary">Seu salário: </label>
      <br>
      <input type="number" id="salary" name="salary" step="0.01" min="0">
      <br>
      <label for="savings-goal"> Quanto você quer ter guardado: </label>
      <br>
      <input type="number" id="savings-goal" name="savings-goal" step="0.01" min="0">
      <br>
      <label for="savings-period"> Em quantos meses: </label>
      <br>
      <input type="number" id="savings-period" name="savings-period" min="1" value="1">
      <br>
      <input type="submit" value="Calcular">
    </form>
</body>
</html>