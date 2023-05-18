

<?php $__env->startSection('content'); ?>
<div class="container">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <h2>Formulario de Registro</h2>
       <form action="<?php echo e(url('/Clientes')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('clientes.form',['modo'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        
        </form>
    </div>
    
</div>
<?php $__env->stopSection(); ?>
</body>
</html>










<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Landing-Page\resources\views/Clientes/create.blade.php ENDPATH**/ ?>