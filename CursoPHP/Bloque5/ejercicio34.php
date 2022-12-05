<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="ejercicio34.php">
        <input type="text" name="numero" value=" <?php echo $_GET["numero"] + 1; ?> "hidden>
        <p><?php echo $_GET["numero"] + 1; ?></p>
        <input type="submit" value="+1">
    </form>



</body>

</html>