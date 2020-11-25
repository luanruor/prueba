

<?php $__env->startSection('seccion'); ?>

<form action="<?php echo e(route('departamento.crear')); ?>" method="POST">
  <?php echo csrf_field(); ?>

  <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      El nombre es requerido
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden>&times;</span>
      </button>
    </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

  <input type="text" name="nombre" placeholder="Nombre Departamento" class="form-control mb-2" value="<?php echo e(old('nombre')); ?>">

  <select name="estado" class="form-control mb-2">
    <option>Activo</option>
    <option>Inactivo</option>
  </select>
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($loop->iteration); ?></th>
      <td><?php echo e($item->nombre); ?></td>
      <td><?php echo e($item->estado); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php echo e($departamentos->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectos\laravel\prueba\resources\views/prueba.blade.php ENDPATH**/ ?>