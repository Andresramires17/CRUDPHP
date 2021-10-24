<?php

if (!isset($_SESSION["ValidarIngreso"])) {

    echo '<script>window.location = "index.php?pagina=ingreso";</script>';

    return;
} else {
    if ($_SESSION["ValidarIngreso"] != "ok") {

        echo '<script>window.location = "index.php?pagina=ingreso";</script>';

        return;
    }
}

$usuario = ControladorFormulario::ctrListarRegistro(null, null);


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

                        <div class="px-1">
                            <a href="index.php?pagina=editar&id=<?php echo $value['ID']; ?>" class="btn btn-warning"> <i class="fas fa-edit"></i></a>
                        </div>

                        <form method="POST">
                            <input type="hidden" value="<?php echo $value["ID"]; ?>" name="delRegistro">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                            <?php
                            $eliminar = new ControladorFormulario();
                            $eliminar->ctrEliminarRegistro();
                            ?>

                        </form>



                    </div>
                </td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>