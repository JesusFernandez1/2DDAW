<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio5-1.php">
    Curso: <select name="comunidades">
        <?php

        try {
            include('conex.php');
            $conex = Conecta();

            $rs = mysqli_query(
                $conex,
                "SELECT nombre FROM tbl_comunidadesautonomas"
            );

            while ($reg = mysqli_fetch_row($rs)) {
              ?>

            <option><?= $reg[0] ?></option>
              
        <?php
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        } finally {
            mysqli_close($conex); //$conex=$mysqli
        }

        ?>
    </select><input type="submit" value="Enviar">
    </form>
</body>

</html>