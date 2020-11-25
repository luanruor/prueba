

<?php $__env->startSection('seccion'); ?>
<div class="container h-100">
    <div class="row justify-content-center h-100">
        <div class="col-sm-12 align-self-center text-center">
            <div class="card shadow">
                <div class="card-body">           
                  <img src="imagenes/gracias-por-registrarte.png">
                  <br>
                  Quieres Hacer otro registro? <a href="<?php echo e(url()->previous()); ?>" class="btn-info">Haz Clic Aquí</a>
              </div>
          </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectos\laravel\prueba\resources\views/RegistroExitoso.blade.php ENDPATH**/ ?>