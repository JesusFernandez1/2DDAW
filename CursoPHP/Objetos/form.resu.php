    <h1>Formulario</h1>
    <form method="post">
        <p>Operacion: <?= $_POST['op']?></p>
        <p>Texti: <?= 
            filter_input(INPUT_POST,'nombre')?></p>
        <!--p>Opcion: <?= $_POST['opcion']?></p-->

        <!--p>Opcion: <?= print_r($_POST['opciones'])?></p-->

        <p>Opcion: <?= $_POST['num']?></p>

        <p>Texti: <?= $_POST['texto']?></p>
    </form>
