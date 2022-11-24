<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        table,
        th {
            border: 2px solid black;
            border-collapse: collapse;
        }

        th {

            background-color: darkcyan;
            color: white,
        }
    </style>

    <table>
        <tr>

            <th>CCAA</th>

            <th>Provincias</th>

        </tr>
        <?php

        try {
            include('conex.php');
            $conex = Conecta();

            $rs = mysqli_query(
                $conex,
                "SELECT c.nombre, c.id FROM tbl_comunidadesautonomas c"
            );

            while ($reg = mysqli_fetch_row($rs)) {
                ?>
                <tr>
                    <td><?= $reg[0] ?></td>
                    <?php

                    $rs2 = mysqli_query(
                        $conex,
                        "SELECT p.nombre FROM tbl_provincias p WHERE p.comunidad_id=$reg[1]"
                    );
                    while ($reg2 = mysqli_fetch_row($rs2)) {
                    ?>
                    
                    <td><?= $reg2[0] ?></td>
                    
                
            <?php
                    }?>
                    </tr>
                    <?php
                }
            } catch (\Exception $e) {
                echo $e->getMessage();
            } finally {
                mysqli_close($conex); //$conex=$mysqli
            }

    ?>
    </table>
</body>

</html>