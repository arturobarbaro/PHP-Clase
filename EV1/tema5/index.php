<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <?php $numero = isset($_GET['num']) ? trim($_GET ['num']) : '' ?>
        <form action="" method="get">
            <label for="num"Número:></label>
            <input id="num" type="text" name="num" value="<?= $numero ?>"> <!--id y name no tienen por qué llamarse igual, pero for e id sí-->
            <input type="submit" value="Calcular">  <!--Los botones a menos que sea interesante los vamos a hacer sin name-->
        </form>

        <?php
        require './auxiliar.php';

        if (!empty($numero)) {
            if (!ctype_digit($numero)) {
                mostrarError("por favor introduzca un numero.");
            } else {
                if ($numero < 0 || $numero > 10) {
                    mostrarError("el número debe estar comprendido entre 0 y 10.");
                } else {
                    mostrarTabla($numero);
                }
            }
        }
        ?>
    </body>
</html>
