<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Formulario</title>
</head>
<body>

    <h1><?php echo e($modo); ?> cliente editar</h1>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<!-- Tu formulario aquí -->

   
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" value="<?php echo e(($cliente->nombre)?? ''); ?>" required>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" name="apellido" value="<?php echo e($cliente->apellido ?? ''); ?>" required>
    </div>
    <div class="form-group">
        <label for="cedula">Cédula:</label>
        <input type="number" class="form-control" name="cedula" value="<?php echo e($cliente->cedula ?? ''); ?>"  required>
    </div>
    <div class="form-group">
        <label for="departamento">Departamento:</label>
        <select class="form-control" name="departamento" required>
            <option value="departamento1">departamento1</option>
            <option value="departamento1">departamento2</option>

            <!-- Agrega más opciones según la lista de departamentos de Colombia -->
        </select>
    </div>
    <div class="form-group">
        <label for="ciudad">Ciudad:</label>
        <select class="form-control" name="ciudad" required>
            <option value="ciudad1" >ciudad1</option>
            <option value="ciudad2">ciudad2</option>
            <!-- Agrega más opciones dependiendo del departamento seleccionado -->
        </select>
    </div>
    
    <div class="form-group">
        <label for="celular">Celular:</label>
        <input type="number" class="form-control" name="celular"value="<?php echo e($cliente->celular ?? ''); ?>"  required>
    </div>
    <div class="form-group">
        <label for="correo_electronico">Correo Electrónico:</label>
        <input type="email" class="form-control" name="correo_electronico" value="<?php echo e($cliente->correo_electronico ?? ''); ?>" required>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="habeas_data" required>
        <label class="form-check-label" for="habeas_data">Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales</label>
    </div>
    
    
    <a href="<?php echo e(url('Clientes/')); ?>" class="btn btn-success">Registrar cliente</a>
    
    <a href="<?php echo e(url('Clientes/')); ?>" class="btn btn-success">Regresar nuevamente</a>
    


    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>    <?php /**PATH C:\xampp\htdocs\Landing-Page\resources\views/clientes/form.blade.php ENDPATH**/ ?>