<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//echo "<p>".$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'</p>';
try {
    include('conex.php');
    $conex=Conecta();
    $inicialProvincia = $_GET['inicialProvincia']=='' ? "XXXXXX" : $_GET['inicialProvincia'];
    

    $sql="SELECT nombre, cod  FROM tbl_provincias 
    where nombre like '".addslashes($inicialProvincia)."%'";
    echo "<pre>$sql</pre>";
    $rs = mysqli_query($conex, $sql);
    if (!mysqli_num_rows($rs)) {
        echo "<p>No hay provincias que comienzen por ".$_GET['inicialProvincia'];
    }
    ?>
    <table border="1"> 
    <?php while($reg = mysqli_fetch_assoc($rs)) :  ?>
        <tr>
            <td><?=$reg['cod']?></td>
            <td><?=$reg['nombre']?></td>
        </tr>
        <?php
    endwhile;
    ?>
    </table>
    <?php
}
catch(\Exception $e) {
    echo $e->getMessage();
}

?>    
</body>
</html>
