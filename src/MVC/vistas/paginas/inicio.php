<?php

if (!isset($_SESSION["ValidarIngreso"])) {

    echo '<script>window.location = "index.php?pagina=ingreso";</script>';

    return;
}else {
    if ($_SESSION["ValidarIngreso"] != "ok") {

        echo '<script>window.location = "index.php?pagina=ingreso";</script>';

        return;
    }
}

$usuario = ControladorFormulario::ctrListarRegistro();


?>

<table class="table">
    <thead>
        <tr>
            <th>EN VISTA</th>
            <th>En BD</th>
            <th>CORREO</th>
            <th>NOMBRE</th>
            <th>FECHA DE REGISTRO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuario as $key => $value) : ?>
            <tr>
                <td><?php echo ($key + 1); ?></td>
                <td><?php echo $value["ID"]; ?></td>
                <td><?php echo $value["correo"]; ?></td>
                <td><?php echo $value["nombre"]; ?></td>
                <td><?php echo $value["fecha"]; ?></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>