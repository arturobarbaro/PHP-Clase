<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
  </head>
  <body>
    <?php $numero = 5; ?>

    <table border="1">
      <thead>
        <th><?= $numero ?></th>
        <th>x</th>
        <th>n</th>
        <th> = </th>
        <th>m</th>
      </thead>
      <tbody>
        <?php for ($i = 0; $i <= 10; $i++): ?> <!--si el código php es de una línea es mejor ponerlo todo junto apertura y cierre-->
          <tr>
            <td><?= $numero ?></td>
            <td>x</td>
            <td><?= $i ?></td>
            <td> = </td>
            <td><?= $numero * $i ?></td>  <!--en html sí se puede pasar el producto sin una variable-->
          </tr>
        <?php endfor ?>
      </tbody>
    </table>
  </body>
</html>
