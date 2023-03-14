<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insira o EXCELL</title>
</head>
<body>
    <h1>UPLOAD do arquivo XML</h1>
    <form method="POST" action="processa_excell.php" enctype="multipart/form-data">
        <label>Arquivo XML: </label>
        <input type="file" name="arquivo"><br><br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>