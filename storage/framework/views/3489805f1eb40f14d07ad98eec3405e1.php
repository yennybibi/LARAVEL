
<style>


    .table-responsive {
        overflow: auto;
        background-color: rgb(125, 131, 165);
        width: 1200px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .thead-dark {
        background-color: #343a40;
        color: #fff;
    }

    th,
    td {
        padding: 0.75rem;
        vertical-align: top;
    }

    .custom-delete-button {
    background-color: #4615b9;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.enlace-estilizado {
    text-decoration: none;
    color: blue;
    /* Agrega más estilos aquí */
  }

  .custom-button {
  background-color: #337ab7;
  color: #fff;
  padding: 5px 10px;
  border-radius: 4px;
  border: none;
}

.custom-link {
  text-decoration: none;
  color: blue;
}


</style>




<?php $__env->startSection('content'); ?>
<div class="container">


<?php if(Session::has('mensaje')): ?>
    <div class="alert alert-success">
        <?php echo e(Session::get('mensaje')); ?>

    </div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(Session::get('error')); ?>

    </div>
<?php endif; ?>


<a href="<?php echo e(url('Clientes/')); ?>" class="btn btn-success">Registrar cliente</a>
    

<br><br>


<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Departamento</th>
                <th>Ciudad</th>
                <th>Correo electronico</th>
                <th>habeas Data</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th><?php echo e($cliente->id); ?></th>
                <th><?php echo e($cliente->nombre); ?></th>
                <th><?php echo e($cliente->apellido); ?></th>
                <th><?php echo e($cliente->cedula); ?></th>
                <th><?php echo e($cliente->departamento); ?></th>
                <th><?php echo e($cliente->ciudad); ?></th>
                <th><?php echo e($cliente->correo_electronico); ?></th>
                <td><?php echo e($cliente->habeas_data); ?></td>
                <td><?php echo e($cliente->created_at); ?></td>
                <td><?php echo e($cliente->updated_at); ?></td>
                <td>

                    
                    <a href="<?php echo e(url('Clientes/' . $cliente->id . '/edit')); ?>" style="text-decoration: none; background-color: #337ab7; color: #fff; padding: 5px 10px; border-radius: 4px;">Editar</a>

                  


                    
            <td>

                <form action="<?php echo e(url('Clientes/'. $cliente->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

    
                    <button type="submit" onclick="return confirm('¿Estás seguro de borrar?')" class="btn btn-danger custom-delete-button">
                        Borrar
                    </button>
                </form>
            </tr>
        </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Landing-Page\resources\views/Clientes/index.blade.php ENDPATH**/ ?>