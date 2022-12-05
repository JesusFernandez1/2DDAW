
    <h1>Formulario</h1>
    <form method="post">
        <input type="hidden" name="op" value="1">
        <p>Nombre: <input type="text" name="nombre"> 
        <?=VerError('nombre')?>
        
        <p>Número: <input type="number" name="num" 
            value="<?=VP('num')?>">
            <?=VerError('num')?>

     


        <?php
        $opciones_dis=[
            ''=>'',
            '1'=>'Valor 1',
            '2'=>'Valor 2',
            '3'=>'Valor 3',
            '4'=>'Valor 4',
            '5'=>'Valor 5',
            '6'=>'Valor 6',
        ]
        ?>            
        <p><select name="opcion">
            <?php foreach($opciones_dis as $value=>$desc) :?>
                <option value="<?=$value?>" 
                    <?php if (filter_input(INPUT_POST, 'opcion')==$value) 
                    echo ' selected';
                ?>><?=$desc?></option>
            <?php endforeach; ?>
        </select>
        <?=VerError('opcion')?>

        <button type="submit" name="boton1">Enviar 1</button>
            <button type="submit" name="boton2">Enviar 2</button>
       

        <!--select name="opciones[]" size="3" multiple>
            <option value="1">Uno</option>
            <option value="2" selected>Dos</option>
            <option value="3">Tres</option>
            <option value="4">Cuatro</option>
        </select>        
        -->
        </p>
        </p>
    </form>
