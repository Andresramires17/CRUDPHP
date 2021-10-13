<?php

$usuario = ControladorFormulario::ctrListarRegistro();


?>

<table class="table">
    <thead>
        <tr>
            <th>CORREO</th>
            <th>NOMBRE</th>
            <th>FECHA DE REGISTRO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuario as $key => $value) : ?>
            <tr>
                <td><?php echo $value["correo"]; ?></td>
                <td><?php echo $value["nombre"]; ?></td>
                <td><?php echo $value["pwd"]; ?></td>
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